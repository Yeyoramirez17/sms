<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Repositories;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;

interface UserRepositoryInterface
{
    /**
     * Persist a new user entity.
     *
     * @param User $user The user entity to save
     * @return User The saved user.
     */
    public function save(User $user): User;


    /**
     * Update an existing user
     *
     * @param User $user The user entity with updated data
     * @return User The updated user entity
     */
    public function update(User $user): User;

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
