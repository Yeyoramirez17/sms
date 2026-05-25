<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Entities;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\FullName;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

/**
 * User aggregate root representing a system user.
 *
 * This class encapsulates all user-related properties and behaviors,
 * including password management, role changes, and status updates.
 *
 * It also tracks domain events that occur during operations on the user.
 */
final class User
{
    private UserId $userId;
    private Email $email;
    private FullName $name;
    private Password $password;
    private Role $role;
    private UserStatus $status;
    private ?\DateTimeImmutable $createdAt;
    private ?\DateTimeImmutable $updatedAt;

    /**
     * @var array<int, object> Domain events that occurred during this operation
     */
    private array $domainEvents = [];

    private function __construct(
        UserId $id,
        Email $email,
        FullName $name,
        Password $password,
        Role $role,
        UserStatus $status,
        ?\DateTimeImmutable $createdAt = null,
        ?\DateTimeImmutable $updatedAt = null
    ) {
        $this->userId    = $id;
        $this->email     = $email;
        $this->name      = $name;
        $this->password  = $password;
        $this->role      = $role;
        $this->status    = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
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

    public function getName(): FullName
    {
        return $this->name;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * Factory method to create a new User
     *
     * @param Email $email
     * @param string $plainPassword
     * @param Role $role
     * @return User
     */
    public static function create(Email $email, FullName $name, string $plainPassword, Role $role, UserStatus $status): self
    {
        return new self(
            new UserId(),
            $email,
            $name,
            Password::fromPlainText($plainPassword),
            $role,
            $status
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
     * @param \DateTimeImmutable $createdAt
     * @param \DateTimeImmutable|null $updatedAt
     * @return User
     */
    public static function reconstruct(
        UserId $userId,
        Email $email,
        FullName $name,
        Password $password,
        Role $role,
        UserStatus $status,
        \DateTimeImmutable $createdAt,
        ?\DateTimeImmutable $updatedAt = null
    ): self {
        return new self($userId, $email, $name, $password, $role, $status, $createdAt, $updatedAt);
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
