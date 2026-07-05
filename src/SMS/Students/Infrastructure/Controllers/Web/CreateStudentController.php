<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\CreateStudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Src\SMS\Students\Application\DTOs\CreateStudentDTO;
use Src\SMS\Students\Application\UseCases\CreateStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\DuplicateDocumentException;
use Src\SMS\Students\Domain\Exceptions\DuplicateStudentCodeException;
use Src\SMS\Users\Application\DTOs\CreateUserDTO;
use Src\SMS\Users\Application\UseCases\CreateUserUseCase;
use Src\SMS\Users\Domain\ValueObjects\Role;

final class CreateStudentController extends Controller
{
    public function __construct(
        private CreateUserUseCase $createUserUseCase,
        private CreateStudentUseCase $createStudentUseCase,
    ) {}

    public function create(): View
    {
        return view("students.create");
    }

    public function store(CreateStudentRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            $userResponse = $this->createUserUseCase->execute(
                new CreateUserDTO(
                    email: $data["email"],
                    plainPassword: Str::random(10),
                    role: Role::STUDENT->value,
                ),
            );

            $dto = CreateStudentDTO::fromArray([
                ...$data,
                "user_id" => $userResponse->id,
            ]);

            $this->createStudentUseCase->execute($dto);

            DB::commit();

            return redirect()
                ->route("students.index")
                ->with("success", "Student created successfully");
        } catch (DuplicateDocumentException $e) {
            DB::rollBack();

            return back()->withInput()->with("error", $e->getMessage());
        } catch (DuplicateStudentCodeException $e) {
            DB::rollBack();

            return back()->withInput()->with("error", $e->getMessage());
        } catch (\InvalidArgumentException $e) {
            DB::rollBack();

            return back()->withInput()->with("error", $e->getMessage());
        }
    }
}
