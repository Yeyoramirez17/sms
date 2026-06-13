<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Persistence\Repositories;

use App\Models\User as UserEloquent;
use Illuminate\Support\Facades\Log;
use Override;
use Src\SMS\Shared\Domain\Persistence\Criteria\Contracts\CriteriaInterface;
use Src\SMS\Shared\Domain\Persistence\Criteria\Criteria;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Exceptions\UserNotFoundException;
use Src\SMS\Users\Domain\Persistence\UserPaginatedResult;
use Src\SMS\Users\Domain\Persistence\UserRepositoryInterface;
use Src\SMS\Users\Infrastructure\Persistence\Criteria\CriteriaToEloquentApplier;
use Src\SMS\Users\Infrastructure\Persistence\Mappers\EloquentUserMapper;

final class EloquentUserRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly EloquentUserMapper $mapper,
        private readonly CriteriaToEloquentApplier $applier,
    ) {}

    public function save(User $user): User
    {
        $data = $this->mapper->toArray($user);

        /** @var UserEloquent $userEloquent */
        $userEloquent = UserEloquent::create($data);

        return $this->mapper->toEntityFromModel($userEloquent);
    }

    /**
     * Updates an existing user in the database.
     *
     * @throws UserNotFoundException if the user to update does not exist.
     * @param User $user The user entity with updated data.
     * @return User The updated user entity.
     */
    public function update(User $user): User
    {
        $data = $this->mapper->toArray($user);

        /** @var \App\Models\User|null $userEloquent */
        $userEloquent = UserEloquent::find($user->getId()->value(), '*');

        if ($userEloquent === null) {
            throw new UserNotFoundException($user->getId()->value());
        }

        $userEloquent->update($data);

        return $this->mapper->toEntityFromModel($userEloquent);
    }

    public function findById(UserId $userId): ?User
    {
        $model = UserEloquent::find($userId->value());

        if ($model === null) return null;

        return $this->mapper->toEntityFromModel($model);
    }

    public function findByEmail(Email $email): ?User
    {
        $model = UserEloquent::where('email', $email->value())->first();

        if ($model === null) {
            return null;
        }

        return $this->mapper->toEntityFromModel($model);
    }

    public function existsByEmail(Email $email): bool
    {
        return UserEloquent::where('email', $email->value())->exists();
    }

    /**
     * Deletes a user from the database.
     *
     * @param User $user The user entity to be deleted.
     * @return void
     */
    public function delete(User $user): void
    {
        UserEloquent::where('id', $user->getId()->value())->delete();
    }

    #[Override]
    public function findByCriteria(CriteriaInterface $criteria): UserPaginatedResult
    {
        $query = UserEloquent::query();

        $query = $this->applier->apply($query, $criteria);

        $total = (clone $query)->toBase()->getCountForPagination();

        $models = $query->get();

        $items  = $models->map(fn($model) => $this->mapper->toEntityFromModel($model))->all();

        $limit  = $criteria->getPagination()?->limit  ?? count($items);
        $offset = $criteria->getPagination()?->offset ?? 0;

        $currentPage = $limit > 0 ? (int) floor($offset / $limit) + 1 : 1;
        $perPage     = $limit > 0 ? $limit : $total;
        $lastPage    = $limit > 0 ? max(1, (int) ceil($total / $limit)) : 1;

        return new UserPaginatedResult(
            $items,
            $total,
            $currentPage,
            $perPage,
            $lastPage,
        );
    }
}
