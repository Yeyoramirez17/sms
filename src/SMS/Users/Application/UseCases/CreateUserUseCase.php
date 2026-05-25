<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\FullName;
use Src\SMS\Users\Application\DTOs\CreateUserDTO;
use Src\SMS\Users\Application\DTOs\UserResponseDTO;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Exceptions\DuplicateEmailException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

final readonly class CreateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {}

    /**
     * Creates a new user in the system.
     *
     * @throws DuplicateEmailException if the email is already registered.
     * @throws \InvalidArgumentException
     */
    public function execute(CreateUserDTO $dto): UserResponseDTO
    {
        $email    = new Email($dto->email);
        $fullName = new FullName($dto->firstName, $dto->lastName);

        // Validate that email is not already registered
        if ($this->userRepository->existsByEmail($email)) {
            throw DuplicateEmailException::fromEmail($email);
        }

        // Create the user aggregate
        $user = User::create(
            $email,
            $fullName,
            $dto->plainPassword,
            Role::STUDENT,
            UserStatus::INACTIVE,
        );

        // Persist the user
        $user = $this->userRepository->save($user);

        // Return the response DTO
        return UserResponseDTO::fromEntity($user);
    }
}
