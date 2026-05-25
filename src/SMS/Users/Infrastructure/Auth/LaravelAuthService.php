<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Auth;

use Illuminate\Support\Facades\Auth;
use Src\SMS\Users\Domain\Contracts\AuthServiceInterface;

final class LaravelAuthService implements AuthServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function attempLogin(string $email, string $password, bool $remember = false): bool
    {
        return Auth::attempt(['email' => $email, 'password' => $password], $remember);
    }

    public function logout(): void
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}
