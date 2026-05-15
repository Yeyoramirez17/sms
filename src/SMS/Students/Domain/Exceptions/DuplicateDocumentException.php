<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Exceptions;

use DomainException;

/**
 * Exception thrown when a student with a duplicate document is encountered.
 */
final class DuplicateDocumentException extends DomainException
{
    public static function withDocument(string $documentType, string $documentNumber): self
    {
        return new self(
            sprintf(
                'A student with document %s %s already exists.',
                $documentType,
                $documentNumber
            )
        );
    }

    public static function withDocumentObject(string $documentType, string $documentNumber): self
    {
        return self::withDocument($documentType, $documentNumber);
    }
}
