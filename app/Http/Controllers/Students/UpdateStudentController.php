<?php

declare(strict_types=1);

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\SMS\Students\Infrastructure\Controllers\UpdateSudentController as SMSUpdateSudentController;

class UpdateStudentController extends Controller
{
    public function __construct(
        private SMSUpdateSudentController $updateStudentController
    ) {}

    public function __invoke(Request $request)
    {
        return ($this->updateStudentController)($request);
    }
}
