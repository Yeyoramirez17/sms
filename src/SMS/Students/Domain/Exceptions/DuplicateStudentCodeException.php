<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Exceptions;

use DomainException;

/**
 * Exception thrown when a student with a duplicate code is encountered.
 */
final class DuplicateStudentCodeException extends DomainException
{
    public static function withCode(string $studentCode): self
    {
        return new self(
            sprintf('A student with the code %s already exists.', $studentCode)
        );
    }
}
