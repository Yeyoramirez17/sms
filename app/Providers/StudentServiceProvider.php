<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\SMS\Students\Application\UseCases\CreateStudentUseCase;
use Src\SMS\Students\Application\UseCases\DeleteStudentUseCase;
use Src\SMS\Students\Application\UseCases\GetStudentByIdUseCase;
use Src\SMS\Students\Application\UseCases\SearchStudentsUseCase;
use Src\SMS\Students\Application\UseCases\UpdateStudentUseCase;
use Src\SMS\Students\Domain\Repositories\StudentQueryInterface;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\Services\StudentCodeGenerator;
use Src\SMS\Students\Infrastructure\Mappers\EloquentStudentMapper;
use Src\SMS\Students\Infrastructure\Repositories\EloquentStudentRepository;

final class StudentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(EloquentStudentMapper::class);

        $this->app->singleton(StudentCodeGenerator::class, function () {
            return new StudentCodeGenerator(1);
        });

        $this->app->bind(
            StudentRepositoryInterface::class,
            EloquentStudentRepository::class
        );

        $this->app->bind(
            StudentQueryInterface::class,
            EloquentStudentRepository::class
        );

        $this->app->bind(CreateStudentUseCase::class, function ($app) {
            return new CreateStudentUseCase(
                $app->make(StudentRepositoryInterface::class),
                $app->make(StudentCodeGenerator::class)
            );
        });

        $this->app->bind(GetStudentByIdUseCase::class, function ($app) {
            return new GetStudentByIdUseCase(
                $app->make(StudentRepositoryInterface::class)
            );
        });

        $this->app->bind(UpdateStudentUseCase::class, function ($app) {
            return new UpdateStudentUseCase(
                $app->make(StudentRepositoryInterface::class)
            );
        });

        $this->app->bind(DeleteStudentUseCase::class, function ($app) {
            return new DeleteStudentUseCase(
                $app->make(StudentRepositoryInterface::class)
            );
        });

        $this->app->bind(SearchStudentsUseCase::class, function ($app) {
            return new SearchStudentsUseCase(
                $app->make(StudentQueryInterface::class)
            );
        });
    }

    public function boot(): void {}
}
