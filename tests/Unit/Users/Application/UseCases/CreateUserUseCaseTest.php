<?php

declare(strict_types=1);

namespace Tests\Unit\Users\Application\UseCases;

use Mockery\MockInterface;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Users\Application\DTOs\CreateUserDTO;
use Src\SMS\Users\Application\UseCases\CreateUserUseCase;
use Src\SMS\Users\Domain\Exceptions\DuplicateEmailException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Tests\TestCase;

final class CreateUserUseCaseTest extends TestCase
{
    private MockInterface $userRepository;

    private CreateUserUseCase $useCase;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var UserRepositoryInterface $userRepository */
        $this->userRepository = \Mockery::mock(UserRepositoryInterface::class);
        $this->useCase = new CreateUserUseCase($this->userRepository);
    }

    /**
     * Test successful user creation
     */
    public function test_create_user_successfully(): void
    {
        $dto = new CreateUserDTO(
            email: 'john.doe@example.com',
            plainPassword: 'SecurePass123!',
            role: Role::STUDENT->value,
        );

        $this->userRepository
            ->shouldReceive('existsByEmail')
            ->once()
            ->with(\Mockery::on(fn (Email $email) => $email->value() === 'john.doe@example.com'))
            ->andReturn(false);

        $this->userRepository
            ->shouldReceive('save')
            ->once();

        $response = $this->useCase->execute($dto);

        $this->assertEquals('john.doe@example.com', $response->email);
        $this->assertEquals(Role::STUDENT->value, $response->role);
        $this->assertEquals('active', $response->status);
    }

    /**
     * Test creating user with duplicate email throws exception
     */
    public function test_create_user_with_duplicate_email_throws_exception(): void
    {
        $dto = new CreateUserDTO(
            email: 'existing@example.com',
            plainPassword: 'SecurePass123!',
            role: Role::STUDENT->value,
        );

        $this->userRepository
            ->shouldReceive('existsByEmail')
            ->once()
            ->andReturn(true);

        $this->expectException(DuplicateEmailException::class);

        $this->useCase->execute($dto);
    }

    /**
     * Test creating user with invalid email throws exception
     */
    public function test_create_user_with_invalid_email_throws_exception(): void
    {
        $dto = new CreateUserDTO(
            email: 'invalid-email',
            plainPassword: 'SecurePass123!',
            role: Role::STUDENT->value,
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid email format');

        $this->useCase->execute($dto);
    }

    /**
     * Test creating user with weak password throws exception
     */
    public function test_create_user_with_weak_password_throws_exception(): void
    {
        $dto = new CreateUserDTO(
            email: 'john@example.com',
            plainPassword: 'weak',
            role: Role::STUDENT->value,
        );

        $this->userRepository
            ->shouldReceive('existsByEmail')
            ->once()
            ->andReturn(false);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('at least 8 characters');

        $this->useCase->execute($dto);
    }

    /**
     * Test creating teacher user
     */
    public function test_create_teacher_user(): void
    {
        $dto = new CreateUserDTO(
            email: 'teacher@example.com',
            plainPassword: 'SecurePass123!',
            role: Role::TEACHER->value,
        );

        $this->userRepository
            ->shouldReceive('existsByEmail')
            ->once()
            ->andReturn(false);

        $this->userRepository
            ->shouldReceive('save')
            ->once();

        $response = $this->useCase->execute($dto);

        $this->assertEquals(Role::TEACHER->value, $response->role);
    }

    /**
     * Test creating admin user
     */
    public function test_create_admin_user(): void
    {
        $dto = new CreateUserDTO(
            email: 'admin@example.com',
            plainPassword: 'SecurePass123!',
            role: Role::ADMIN->value,
        );

        $this->userRepository
            ->shouldReceive('existsByEmail')
            ->once()
            ->andReturn(false);

        $this->userRepository
            ->shouldReceive('save')
            ->once();

        $response = $this->useCase->execute($dto);

        $this->assertEquals(Role::ADMIN->value, $response->role);
    }
}
