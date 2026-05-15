<?php

declare(strict_types=1);

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\SMS\Students\Infrastructure\Controllers\GetStudentByCriteriaController as SMSGetStudentByCriteriaController;

class GetStudentByCriteriaController extends Controller
{
    public function __construct(
        private SMSGetStudentByCriteriaController $getStudentByCriteriaController
    ) {}

    public function __invoke(Request $request)
    {
        return ($this->getStudentByCriteriaController)($request);
    }
}
