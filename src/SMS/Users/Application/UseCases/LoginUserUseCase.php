<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Domain\Contracts\AuthServiceInterface;

final class LoginUserUseCase
{
    public function __construct(
        public AuthServiceInterface $authService,
    ) {}

    public function execute(LoginRequestDTO $dto): bool
    {
        return $this->authService->attempLogin($dto->email, $dto->password, $dto->remember);
    }

    public function logout(): void
    {
        $this->authService->logout();
    }
}
