<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\SMS\Students\Infrastructure\Controllers\DeleteStudentController as SMSDeleteStudentController;

class DeleteStudentController extends Controller
{
    public function __construct(
        private SMSDeleteStudentController $deleteStudentController
    ) {}

    public function __invoke(string $id)
    {
        return ($this->deleteStudentController)($id);
    }
}
