<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Application\DTOs\UserResponseDTO;
use Src\SMS\Users\Domain\Persistence\UserRepositoryInterface;

final class GetUserById
{
    public function __construct(
        private UserRepositoryInterface $repository,
    ) {}

    public function execute(string $userId): ?UserResponseDTO
    {
        $user = $this->repository->findById(new UserId($userId));

        if (is_null($user)) return null;

        return UserResponseDTO::fromEntity($user);
    }
}
