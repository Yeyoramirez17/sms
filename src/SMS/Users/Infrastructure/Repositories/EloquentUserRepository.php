<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Repositories;

use App\Models\User as UserEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Exceptions\UserNotFoundException;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Infrastructure\Mappers\EloquentUserMapper;

final class EloquentUserRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly EloquentUserMapper $mapper,
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

        /** @var UserEloquent $userEloquent */
        $userEloquent = UserEloquent::find($user->getId()->value());

        if ($userEloquent === null) {
            throw new UserNotFoundException($user->getId()->value());
        }

        $userEloquent->update($data);

        return $this->mapper->toEntityFromModel($userEloquent);
    }

    public function findById(UserId $userId): ?User
    {
        $model = UserEloquent::find($userId->value());

        if ($model === null) {
            return null;
        }

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
}
