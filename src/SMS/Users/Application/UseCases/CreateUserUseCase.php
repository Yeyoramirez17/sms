<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Users\Application\DTOs\CreateUserDTO;
use Src\SMS\Users\Application\DTOs\UserResponseDTO;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Exceptions\DuplicateEmailException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;

final readonly class CreateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {
    }

    /**
     * @throws DuplicateEmailException
     * @throws \InvalidArgumentException
     */
    public function execute(CreateUserDTO $dto): UserResponseDTO
    {
        $email = new Email($dto->email);

        // Validate that email is not already registered
        if ($this->userRepository->existsByEmail($email)) {
            throw DuplicateEmailException::fromEmail($email);
        }

        // Create the user aggregate
        $user = User::create(
            $email,
            $dto->plainPassword,
            $dto->getRole()
        );

        // Persist the user
        $this->userRepository->save($user);

        // Return the response DTO
        return UserResponseDTO::fromEntity($user);
    }
}
