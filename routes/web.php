<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use SMS\Users\Infrastructure\Controllers\AuthController;
use Src\SMS\Students\Infrastructure\Controllers\Web\CreateStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\DeleteStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\EditStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Web\GetStudentByCriteriaController;
use Src\SMS\Students\Infrastructure\Controllers\Web\GetStudentByIdController;
use Src\SMS\Students\Infrastructure\Controllers\Web\UpdateStudentController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', GetStudentByCriteriaController::class)->name('index');
        Route::get('/create', [CreateStudentController::class, 'create'])->name('create');
        Route::post('/', [CreateStudentController::class, 'store'])->name('store');
        Route::get('/{id}', GetStudentByIdController::class)->name('show');
        Route::get('/{id}/edit', EditStudentController::class)->name('edit');
        Route::put('/{id}', [UpdateStudentController::class, 'update'])->name('update');
        Route::delete('/{id}', [DeleteStudentController::class, 'destroy'])->name('destroy');
    });
});

Route::get('/', function () {
    return redirect()->route('login');
});
