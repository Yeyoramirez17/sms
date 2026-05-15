<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Events;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\ValueObjects\Role;

final class UserCreatedEvent
{
    public function __construct(
        private readonly UserId $userId,
        private readonly Email $email,
        private readonly Role $role,
    ) {}

    public function getUserId(): UserId
    {
        return $this->userId;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function getOccurredOn(): \DateTimeImmutable
    {
        return new \DateTimeImmutable;
    }
}
