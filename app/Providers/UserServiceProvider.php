<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\SMS\Users\Application\UseCases\AuthenticateUserUseCase;
use Src\SMS\Users\Application\UseCases\CreateUserUseCase;
use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
use Src\SMS\Users\Infrastructure\Mappers\EloquentUserMapper;
use Src\SMS\Users\Infrastructure\Repositories\EloquentUserRepository;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(EloquentUserMapper::class);

        /**
         * Bind the UserRepositoryInterface to the EloquentUserRepository implementation.
         */
        $this->app->bind(
            UserRepositoryInterface::class,
            EloquentUserRepository::class
        );
        // Bind the use cases to their implementations
        $this->app->bind(CreateUserUseCase::class, function ($app) {
            return new CreateUserUseCase(
                $app->make(UserRepositoryInterface::class)
            );
        });

        $this->app->bind(AuthenticateUserUseCase::class, function ($app) {
            return new AuthenticateUserUseCase(
                $app->make(UserRepositoryInterface::class)
            );
        });
    }

    public function boot(): void
    {
        //
    }
}
