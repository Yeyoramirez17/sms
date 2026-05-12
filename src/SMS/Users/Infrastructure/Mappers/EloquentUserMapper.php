<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Mappers;

use App\Models\User as UserEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

final readonly class EloquentUserMapper
{
    public function toEntity(UserEloquent $model): User
    {
        return User::reconstruct(
            new UserId($model->id),
            new Email($model->email),
            Password::fromExistingHash($model->password),
            Role::from($model->role),
            UserStatus::from($model->status)
        );
    }

    public function toModel(User $entity): array
    {
        return [
            'id' => $entity->getId()->value(),
            'email' => $entity->getEmail()->value(),
            'password' => $entity->getPassword()->hash(),
            'role' => $entity->getRole()->value,
            'status' => $entity->getStatus()->value,
        ];
    }
}
