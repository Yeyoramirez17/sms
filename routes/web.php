<?php

use Illuminate\Support\Facades\Route;
use Src\SMS\Students\Infrastructure\Controllers\Web\CreateStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\DeleteStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\EditStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\GetStudentByCriteriaController;
use Src\SMS\Students\Infrastructure\Controllers\Web\GetStudentByIdController;
use Src\SMS\Students\Infrastructure\Controllers\Web\GetStudentByUserIdController;
use Src\SMS\Students\Infrastructure\Controllers\Web\UpdateStudentController;
use Src\SMS\Users\Infrastructure\Controllers\Web\AuthController;
use Src\SMS\Users\Infrastructure\Controllers\Web\GetUsersController;

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::redirect('settings', 'settings/profile');
    Route::livewire('settings/profile', 'pages::settings.profile')->name('profile.edit');

    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', GetUsersController::class)->name('index');
        Route::get('/create', [CreateStudentController::class, 'create'])->name('create');
        Route::post('/', [CreateStudentController::class, 'store'])->name('store');
        Route::get('/{user_id}', GetStudentByUserIdController::class)->name('show');
        Route::get('/{id}/edit', EditStudentController::class)->name('edit');
        Route::put('/{id}', UpdateStudentController::class)->name('update');
        Route::delete('/{id}', [DeleteStudentController::class, 'destroy'])->name('destroy');
    });
});
