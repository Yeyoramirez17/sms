<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\SMS\Students\Infrastructure\Controllers\CreateStudentController as SMSCreateStudentController;

class CreateStudentController extends Controller
{
    public function __construct(
        private SMSCreateStudentController $createStudentController
    ) {}

    public function __invoke(Request $request)
    {
        return ($this->createStudentController)($request);
    }
}
