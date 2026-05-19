<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Application\UseCases\GetStudentByIdUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class EditStudentController extends Controller
{
    public function __construct(
        private GetStudentByIdUseCase $getStudentByIdUseCase
    ) {}

    public function __invoke(string $id)
    {
        try {
            $response = $this->getStudentByIdUseCase->execute($id);
            return view('students.edit', ['student' => $response->toArray()]);
        } catch (StudentNotFoundException $e) {
            return redirect()->route('students.index')->with('error', $e->getMessage());
        }
    }
}