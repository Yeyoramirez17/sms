<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Exceptions;

use DomainException;

final class InvalidCredentialsException extends DomainException
{
    public static function failed(): self
    {
        return new self('Las credenciales proporcionadas no son válidas.');
    }

    public static function userNotFound(): self
    {
        return new self('No se encontró un usuario con ese correo electrónico.');
    }
}