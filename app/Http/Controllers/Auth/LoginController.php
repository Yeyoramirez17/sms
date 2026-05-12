<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Src\SMS\Users\Application\DTOs\LoginRequestDTO;
use Src\SMS\Users\Application\UseCases\AuthenticateUserUseCase;
use Src\SMS\Users\Domain\Exceptions\InvalidCredentialsException;
use Src\SMS\Users\Domain\Exceptions\UserInactiveException;

class LoginController extends Controller
{
    public function __construct(
        private readonly AuthenticateUserUseCase $authenticateUserUseCase,
    ) {
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse|JsonResponse
    {
        $dto = LoginRequestDTO::fromArray($request->validated());

        try {
            $this->authenticateUserUseCase->execute($dto);

            $user = \App\Models\User::where('email', $dto->email)->first();

            Auth::login($user);

            $request->session()->regenerate();

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Inicio de sesión exitoso.',
                ]);
            }

            return redirect()->intended(route('dashboard'));

        } catch (InvalidCredentialsException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                ], 401);
            }

            return back()->withErrors([
                'email' => $e->getMessage(),
            ])->withInput($request->only('email'));

        } catch (UserInactiveException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                ], 403);
            }

            return back()->withErrors([
                'email' => $e->getMessage(),
            ])->withInput($request->only('email'));
        }
    }

    public function logout(Request $request): JsonResponse|RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Sesión cerrada exitosamente.',
            ]);
        }

        return redirect()->route('login');
    }
}