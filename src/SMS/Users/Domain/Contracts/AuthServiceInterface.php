<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Contracts;

interface AuthServiceInterface
{
    /**
     * Attempt to authenticate a user with the given email and password.
     *
     * @param  string  $email  The email address of the user.
     * @param  string  $password  The password of the user.
     * @param  bool  $remember  Whether to remember the user for future sessions.
     * @return bool Returns true if authentication is successful, false otherwise.
     */
    public function attempLogin(string $email, string $password, bool $remember = false): bool;

    /**
     * Logout the currently authenticated user.
     * @return void
     */
    public function logout(): void;
}
