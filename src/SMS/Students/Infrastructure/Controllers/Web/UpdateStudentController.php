<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\UpdateStudentRequest;
use Illuminate\Http\RedirectResponse;
use Src\SMS\Students\Application\DTOs\UpdateStudentDTO;
use Src\SMS\Students\Application\UseCases\UpdateStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class UpdateStudentController extends Controller
{
    public function __construct(
        private UpdateStudentUseCase $updateStudentUseCase
    ) {}

    public function __invoke(UpdateStudentRequest $request, string $id): RedirectResponse
    {
        try {
            $dto = UpdateStudentDTO::fromArray($request->validated());
            $this->updateStudentUseCase->execute($id, $dto);

            return redirect()->route('students.show', $id)
                ->with('success', 'Student updated successfully');
        } catch (StudentNotFoundException $e) {
            return redirect()->route('students.index')->with('error', $e->getMessage());
        } catch (\InvalidArgumentException $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }
    }
}
