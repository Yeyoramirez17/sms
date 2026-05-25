<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Application\UseCases\LoginUserUseCase;

final class AuthController extends Controller
{
    public function __construct(
        private LoginUserUseCase $authUserUseCase
    ) {}

    public function login(): View
    {
        return view('pages.auth.login');
    }

    public function store(LoginRequest $request)
    {
        $dto = LoginRequestDTO::fromArray([
            ...$request->validated(),
            'remember' => $request->boolean('remember'),
        ]);

        $success = $this->authUserUseCase->execute($dto);

        if (! $success) {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->authUserUseCase->logout();

        return redirect()->route('login');
    }
}
