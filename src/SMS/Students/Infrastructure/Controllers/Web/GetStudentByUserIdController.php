<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\SMS\Students\Application\UseCases\GetStudentByUserIdUseCase;
use Src\SMS\Users\Application\UseCases\GetUserById;

final class GetStudentByUserIdController extends Controller
{
    public function __construct(
        private GetStudentByUserIdUseCase $getStudentByUserIdUseCase,
        private GetUserById $getUserByIdUseCase
    ) {}

    public function __invoke(Request $request)
    {
        $user = $this->getUserByIdUseCase->execute($request->user_id);
        $student = $this->getStudentByUserIdUseCase->execute($request->user_id);
        return view('students.show', compact('student', 'user'));
    }
}
