<?php

declare(strict_types=1);

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Src\SMS\Students\Infrastructure\Controllers\GetStudentByIdController as SMSGetStudentByIdController;

class GetStudentByIdController extends Controller
{
    public function __construct(
        private SMSGetStudentByIdController $smsGetStudentByIdController
    ) {}

    public function __invoke($id)
    {
        return ($this->smsGetStudentByIdController)($id);
    }
}
