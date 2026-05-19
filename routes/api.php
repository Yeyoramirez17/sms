<?php

use Illuminate\Support\Facades\Route;
use Src\SMS\Students\Infrastructure\Controllers\Api\GetStudentByCriteriaController;
use Src\SMS\Students\Infrastructure\Controllers\Api\CreateStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Api\GetStudentByIdController;
use Src\SMS\Students\Infrastructure\Controllers\Api\UpdateStudentController;
use Src\SMS\Students\Infrastructure\Controllers\Api\DeleteStudentController;

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', GetStudentByCriteriaController::class)->name('index');
    Route::post('/', CreateStudentController::class)->name('store');
    Route::get('/{id}', GetStudentByIdController::class)->name('show');
    Route::put('/{id}', UpdateStudentController::class)->name('update');
    Route::delete('/{id}', DeleteStudentController::class)->name('destroy');
});
