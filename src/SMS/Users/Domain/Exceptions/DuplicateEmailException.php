<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Exceptions;

use DomainException;
use Src\SMS\Shared\Domain\ValueObjects\Email;

final class DuplicateEmailException extends DomainException
{
    public static function fromEmail(Email $email): self
    {
        return new self(
            sprintf('A user with email "%s" already exists.', $email->value())
        );
    }
}
