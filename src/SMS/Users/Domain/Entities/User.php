<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Entities;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

final class User
{
    private UserId $userId;
    private Email $email;
    private Password $password;
    private Role $role;
    private UserStatus $status;

    private function __construct(UserId $id, Email $email, Password $password, Role $role, UserStatus $status)
    {
        $this->userId   = $id;
        $this->email    = $email;
        $this->password = $password;
        $this->role     = $role;
        $this->status   = $status;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getPassword(): Password
    {
        return $this->password;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public static function create(Email $email, string $plainPassword, Role $role)
    {
        return new self(
            new UserId(),
            $email,
            Password::fromPlainText($plainPassword),
            $role,
            UserStatus::ACTIVE
        );
    }
}
