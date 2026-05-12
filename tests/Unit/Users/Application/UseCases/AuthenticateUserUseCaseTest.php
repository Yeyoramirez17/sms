<?php

declare(strict_types=1);

namespace Tests\Unit\Users\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Users\Application\DTOs\AuthResponseDTO;
use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Application\UseCases\AuthenticateUserUseCase;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\SMS\Users\Domain\Exceptions\UserInactiveException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;
use Tests\TestCase;

final class AuthenticateUserUseCaseTest extends TestCase
{
    /** @var UserRepositoryInterface $userRepository */
    private $userRepository;

    private AuthenticateUserUseCase $useCase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = \Mockery::mock(UserRepositoryInterface::class);
        $this->useCase = new AuthenticateUserUseCase($this->userRepository);
    }

    public function test_authenticate_with_valid_credentials(): void
    {
        $dto = new LoginRequestDTO(
            email: 'user@example.com',
            password: 'ValidPassword123!',
        );

        $user = User::create(
            new Email('user@example.com'),
            'ValidPassword123!',
            Role::STUDENT
        );

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $response = $this->useCase->execute($dto);

        $this->assertInstanceOf(AuthResponseDTO::class, $response);
        $this->assertEquals('user@example.com', $response->email);
        $this->assertEquals(Role::STUDENT->value, $response->role);
        $this->assertEquals(UserStatus::ACTIVE->value, $response->status);
    }

    public function test_authenticate_fails_with_invalid_email(): void
    {
        $dto = new LoginRequestDTO(
            email: 'nonexistent@example.com',
            password: 'ValidPassword123!',
        );

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn(null);

        $this->expectException(InvalidCredentialsException::class);
        $this->expectExceptionMessage('No se encontró un usuario con ese correo electrónico.');

        $this->useCase->execute($dto);
    }

    public function test_authenticate_fails_with_wrong_password(): void
    {
        $dto = new LoginRequestDTO(
            email: 'user@example.com',
            password: 'WrongPassword123!',
        );

        $user = User::create(
            new Email('user@example.com'),
            'CorrectPassword123!',
            Role::STUDENT
        );

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $this->expectException(InvalidCredentialsException::class);
        $this->expectExceptionMessage('Las credenciales proporcionadas no son válidas.');

        $this->useCase->execute($dto);
    }

    public function test_authenticate_fails_when_user_is_suspended(): void
    {
        $dto = new LoginRequestDTO(
            email: 'user@example.com',
            password: 'ValidPassword123!',
        );

        $user = User::create(
            new Email('user@example.com'),
            'ValidPassword123!',
            Role::STUDENT
        );
        $user->suspend();

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $this->expectException(UserInactiveException::class);
        $this->expectExceptionMessage('Tu cuenta ha sido suspendida.');

        $this->useCase->execute($dto);
    }

    public function test_authenticate_fails_when_user_is_inactive(): void
    {
        $dto = new LoginRequestDTO(
            email: 'user@example.com',
            password: 'ValidPassword123!',
        );

        $user = User::create(
            new Email('user@example.com'),
            'ValidPassword123!',
            Role::STUDENT
        );
        $user->deactivate();

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $this->expectException(UserInactiveException::class);
        $this->expectExceptionMessage('Tu cuenta está inactiva.');

        $this->useCase->execute($dto);
    }

    public function test_admin_can_login(): void
    {
        $dto = new LoginRequestDTO(
            email: 'admin@example.com',
            password: 'AdminPass123!',
        );

        $user = User::create(
            new Email('admin@example.com'),
            'AdminPass123!',
            Role::ADMIN
        );

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $response = $this->useCase->execute($dto);

        $this->assertEquals(Role::ADMIN->value, $response->role);
        $this->assertEquals('Administrador', $response->roleLabel);
    }

    public function test_teacher_can_login(): void
    {
        $dto = new LoginRequestDTO(
            email: 'teacher@example.com',
            password: 'TeacherPass123!',
        );

        $user = User::create(
            new Email('teacher@example.com'),
            'TeacherPass123!',
            Role::TEACHER
        );

        $this->userRepository
            ->shouldReceive('findByEmail')
            ->once()
            ->andReturn($user);

        $response = $this->useCase->execute($dto);

        $this->assertEquals(Role::TEACHER->value, $response->role);
        $this->assertEquals('Docente', $response->roleLabel);
    }
}
