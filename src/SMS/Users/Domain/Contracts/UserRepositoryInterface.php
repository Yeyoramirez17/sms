<?php

declare(strict_types=1);

namespace Src\SMS\User\Domain\Contracts;

use Src\SMS\User\Domain\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;
}
