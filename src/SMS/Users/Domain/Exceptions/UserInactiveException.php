<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Exceptions;

use DomainException;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

final class UserInactiveException extends DomainException
{
    public static function fromStatus(UserStatus $status): self
    {
        $message = match ($status) {
            UserStatus::SUSPENDED => 'Tu cuenta ha sido suspendida. Contacta al administrador.',
            UserStatus::INACTIVE => 'Tu cuenta está inactiva. Contacta al administrador.',
            UserStatus::PENDING_PASSWORD_CHANGE => 'Debes cambiar tu contraseña antes de continuar.',
        };

        return new self($message);
    }

    public static function accountLocked(): self
    {
        return new self('Tu cuenta ha sido bloqueada por múltiples intentos fallidos. Intenta más tarde.');
    }
}