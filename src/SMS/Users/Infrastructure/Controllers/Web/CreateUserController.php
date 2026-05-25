<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use Illuminate\Http\RedirectResponse;
use Src\SMS\Users\Application\DTOs\CreateUserDTO;
use Src\SMS\Users\Application\UseCases\CreateUserUseCase;

final class CreateUserController extends Controller
{
    public function __construct(
        private CreateUserUseCase $useCase
    ) {}

    public function store(UserRequest $request): RedirectResponse
    {
        $dto = CreateUserDTO::fromArray($request->validated());

        $response = $this->useCase->execute($dto);

        return redirect()->route('users.index')->with('success', "User {$response->email} created successfully.");
    }
}
