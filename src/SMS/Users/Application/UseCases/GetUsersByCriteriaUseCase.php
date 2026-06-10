<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\UseCases;

use Src\SMS\Users\Application\DTOs\UserCriteriaDTO;
use Src\SMS\Users\Application\DTOs\UserResponseDTO;
use Src\SMS\Users\Domain\Persistence\UserPaginatedResult;
use Src\SMS\Users\Domain\Persistence\UserRepositoryInterface;
use Src\SMS\Users\Application\Specifications\UserSearchSpecification;
use Src\SMS\Users\Domain\Entities\User;

final class GetUsersByCriteriaUseCase
{
    public function __construct(
        private UserRepositoryInterface $repository
    ) {}

    public function execute(UserCriteriaDTO $dto): UserPaginatedResult
    {
        $result = $this->repository->findByCriteria(
            UserSearchSpecification::fromDTO($dto)
        );

        $result = $result->map(fn(User $user) => UserResponseDTO::fromEntity($user));

        return $result;
    }
}
