<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Repositories;

interface UserRepositoryInterface
{
    public function save(): mixed;
}
