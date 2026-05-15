<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students\CreateStudentController;
use App\Http\Controllers\Students\GetStudentByCriteriaController;
use App\Http\Controllers\Students\GetStudentByIdController;
use App\Http\Controllers\Students\UpdateStudentController;
use App\Http\Controllers\Students\DeleteStudentController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', GetStudentByCriteriaController::class)->name('index');
        Route::post('/', CreateStudentController::class)->name('store');
        Route::get('/{id}', GetStudentByIdController::class)->name('show');
        Route::put('/{id}', UpdateStudentController::class)->name('update');
        Route::delete('/{id}', DeleteStudentController::class)->name('destroy');
    });
});

Route::get('/', function () {
    return redirect()->route('login');
});
