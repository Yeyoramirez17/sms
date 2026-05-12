<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Repositories;

use App\Models\User as UserEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Infrastructure\Mappers\EloquentUserMapper;

final class EloquentUserRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly EloquentUserMapper $mapper,
    ) {
    }

    public function save(User $user): void
    {
        $data = $this->mapper->toModel($user);

        UserEloquent::updateOrCreate(
            ['id' => $user->getId()->value()],
            $data
        );
    }

    public function findById(UserId $userId): ?User
    {
        $model = UserEloquent::find($userId->value());

        if ($model === null) {
            return null;
        }

        return $this->mapper->toEntity($model);
    }

    public function findByEmail(Email $email): ?User
    {
        $model = UserEloquent::where('email', $email->value())->first();

        if ($model === null) {
            return null;
        }

        return $this->mapper->toEntity($model);
    }

    public function existsByEmail(Email $email): bool
    {
        return UserEloquent::where('email', $email->value())->exists();
    }

    public function delete(User $user): void
    {
        UserEloquent::where('id', $user->getId()->value())->delete();
    }
}