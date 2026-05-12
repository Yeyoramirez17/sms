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

    /**
     * @var array<int, object> Domain events that occurred during this operation
     */
    private array $domainEvents = [];

    private function __construct(UserId $id, Email $email, Password $password, Role $role, UserStatus $status)
    {
        $this->userId   = $id;
        $this->email    = $email;
        $this->password = $password;
        $this->role     = $role;
        $this->status   = $status;
    }

    // ===== Getters =====

    public function getId(): UserId
    {
        return $this->userId;
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

    public function getStatus(): UserStatus
    {
        return $this->status;
    }

    /**
     * Factory method to create a new User
     *
     * @param Email $email
     * @param string $plainPassword
     * @param Role $role
     * @return User
     */
    public static function create(Email $email, string $plainPassword, Role $role): self
    {
        return new self(
            new UserId(),
            $email,
            Password::fromPlainText($plainPassword),
            $role,
            UserStatus::ACTIVE
        );
    }

    /**
     * Reconstruct a User from persistence (e.g. database record)
     *
     * @param UserId $userId
     * @param Email $email
     * @param Password $password
     * @param Role $role
     * @param UserStatus $status
     * @return User
     */
    public static function reconstruct(UserId $userId, Email $email, Password $password, Role $role, UserStatus $status): self
    {
        return new self($userId, $email, $password, $role, $status);
    }

    /**
     * Change the user's password after verifying the current password.
     *
     * @param string $currentPasswordPlain
     * @param string $newPasswordPlain
     * @throws \InvalidArgumentException
     * @return void
     */
    public function changePassword(string $currentPasswordPlain, string $newPasswordPlain): void
    {
        if (!$this->password->verify($currentPasswordPlain)) {
            throw new \InvalidArgumentException('Current password is incorrect.');
        }

        $this->password = Password::fromPlainText($newPasswordPlain);
    }

    /**
     * Change the user's role.
     *
     * @param Role $newRole
     * @return void
     */
    public function changeRole(Role $newRole): void
    {
        if ($this->role->equals($newRole)) {
            return; // No change needed
        }

        $this->role = $newRole;
    }

    /**
     * Channge the user's status to SUSPENDED
     *
     * @param string $reason
     * @return void
     */
    public function suspend(string $reason = ''): void
    {
        if ($this->status === UserStatus::SUSPENDED) {
            return;
        }

        $this->status = UserStatus::SUSPENDED;
    }

    public function activate(): void
    {
        if ($this->status === UserStatus::ACTIVE) {
            return;
        }

        $this->status = UserStatus::ACTIVE;
    }

    /**
     * Change the user's status to INACTIVE
     *
     * @return void
     */
    public function deactivate(): void
    {
        if ($this->status === UserStatus::INACTIVE) {
            return;
        }

        $this->status = UserStatus::INACTIVE;
    }

    /**
     * Change the user's email.
     *
     * @param Email $newEmail
     * @return void
     */
    public function changeEmail(Email $newEmail): void
    {
        if ($this->email->equals($newEmail)) {
            return;
        }

        $this->email = $newEmail;
    }

    /**
     * Compare this user with another user.
     *
     * @param User $other
     * @return bool
     */
    public function equals(User $other): bool
    {
        return $this->userId->equals($other->userId);
    }

    // ===== Domain Events =====

    /**
     * @return array<int, object>
     */
    public function getDomainEvents(): array
    {
        return $this->domainEvents;
    }

    protected function recordEvent(object $event): void
    {
        $this->domainEvents[] = $event;
    }

    public function clearDomainEvents(): void
    {
        $this->domainEvents = [];
    }

    public function __toString(): string
    {
        return sprintf('%s (%s)', $this->email->value(), $this->role->value);
    }
}
