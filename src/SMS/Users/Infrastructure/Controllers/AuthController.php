<?php

declare(strict_types=1);

namespace SMS\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Application\UseCases\AuthenticateUserUseCase;
use Src\SMS\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\SMS\Users\Domain\Exceptions\UserInactiveException;

final class AuthController extends Controller
{
    public function __construct(
        private AuthenticateUserUseCase $authenticateUserUseCase
    ) {}

    public function showForm(): View
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $dto = LoginRequestDTO::fromArray($request->validated());

        try {
            $this->authenticateUserUseCase->execute($dto);

            $user = User::where('email', $dto->email)->first();

            Auth::login($user, $dto->remember);

            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));

        } catch (InvalidCredentialsException $e) {

            return back()->withErrors([
                'email' => $e->getMessage(),
            ])->withInput($request->only('email'));

        } catch (UserInactiveException $e) {

            return back()->withErrors([
                'email' => $e->getMessage(),
            ])->withInput($request->only('email'));
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
