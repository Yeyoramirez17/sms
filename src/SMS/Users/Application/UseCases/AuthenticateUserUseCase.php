<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Users\Application\DTOs\AuthResponseDTO;
use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\SMS\Users\Domain\Exceptions\UserInactiveException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;

final readonly class AuthenticateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {}

    /**
     * @throws InvalidCredentialsException
     * @throws UserInactiveException
     */
    public function execute(LoginRequestDTO $dto): AuthResponseDTO
    {
        $email = new Email($dto->email);

        $user = $this->userRepository->findByEmail($email);

        if ($user === null) {
            throw InvalidCredentialsException::userNotFound();
        }

        if (! $user->getPassword()->verify($dto->password)) {
            throw InvalidCredentialsException::failed();
        }

        if (! $user->getStatus()->canLogin()) {
            throw UserInactiveException::fromStatus($user->getStatus());
        }

        return AuthResponseDTO::fromEntity($user);
    }
}
