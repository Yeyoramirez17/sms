<?php

declare(strict_types=1);

namespace Src\SMS\User\Infrastructure\Repositories;

use Src\SMS\User\Domain\Contracts\UserRepositoryInterface;
use Src\SMS\User\Domain\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function save(User $user): void
    {
        throw new \Exception('Not implemented');
    }
}
