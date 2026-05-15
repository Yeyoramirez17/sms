<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Exceptions;

use DomainException;

/**
 * Exception thrown when a student cannot be found.
 */
final class StudentNotFoundException extends DomainException
{
    public static function withId(string $studentId): self
    {
        return new self(
            sprintf('Student with ID %s not found.', $studentId)
        );
    }

    public static function withDocument(string $document): self
    {
        return new self(
            sprintf('Student with document %s not found.', $document)
        );
    }

    public static function withCode(string $studentCode): self
    {
        return new self(
            sprintf('Student with code %s not found.', $studentCode)
        );
    }
}
