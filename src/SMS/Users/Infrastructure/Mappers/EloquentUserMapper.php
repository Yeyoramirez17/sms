<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Mappers;

use App\Models\User as UserEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\FullName;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

final readonly class EloquentUserMapper
{
    /**
     * Converts a UserEloquent model to a User entity.
     *
     * @param UserEloquent $model The Eloquent model to convert.
     * @return User The corresponding User entity.
     */
    public function toEntityFromModel(UserEloquent $model): User
    {
        return User::reconstruct(
            new UserId($model->id),
            new Email($model->email),
            new FullName($model->first_name, $model->last_name),
            Password::fromExistingHash($model->password),
            Role::from($model->role),
            UserStatus::from($model->status),
            $model->created_at->toDateTimeImmutable(),
            $model->updated_at->toDateTimeImmutable()
        );
    }

    /**
     * Converts a User entity to an array suitable for database storage.
     *
     * @param User $entity The User entity to convert.
     */
    public function toArray(User $entity): array
    {
        return [
            'id'         => $entity->getId()->value(),
            'email'      => $entity->getEmail()->value(),
            'first_name' => $entity->getName()->firstName(),
            'last_name'  => $entity->getName()->lastName(),
            'password'   => $entity->getPassword()->hash(),
            'role'       => $entity->getRole()->value,
            'status'     => $entity->getStatus()->value,
        ];
    }
}
