<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Repositories;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;

interface UserRepositoryInterface
{
    /**
     * Persist a new user or update an existing one
     */
    public function save(User $user): void;

    /**
     * Find a user by their unique identifier
     */
    public function findById(UserId $userId): ?User;

    /**
     * Find a user by their email address
     */
    public function findByEmail(Email $email): ?User;

    /**
     * Check if a user with the given email exists
     *
     * @param Email $email
     * @return bool
     */
    public function existsByEmail(Email $email): bool;

    /**
     * Delete a user from persistence
     */
    public function delete(User $user): void;
}
