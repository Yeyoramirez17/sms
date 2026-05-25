<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\SMS\Users\Domain\Contracts\AuthServiceInterface;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Infrastructure\Auth\LaravelAuthService;
use Src\SMS\Users\Infrastructure\Repositories\EloquentUserRepository;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            EloquentUserRepository::class
        );

        $this->app->bind(
            AuthServiceInterface::class,
            LaravelAuthService::class
        );
    }

    public function boot(): void
    {
        //
    }
}
