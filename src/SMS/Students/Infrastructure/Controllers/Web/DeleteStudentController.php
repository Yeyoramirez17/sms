<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Src\SMS\Students\Application\UseCases\DeleteStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class DeleteStudentController extends Controller
{
    public function __construct(
        private DeleteStudentUseCase $deleteStudentUseCase
    ) {}

    public function __invoke(string $id): RedirectResponse
    {
        try {
            $this->deleteStudentUseCase->execute($id);

            return redirect()->route('students.index')
                ->with('success', 'Student deleted successfully');
        } catch (StudentNotFoundException $e) {
            return redirect()->route('students.index')->with('error', $e->getMessage());
        }
    }
}