<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Events;

use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final class StudentCreatedEvent
{
    public function __construct(
        private readonly StudentId $studentId,
        private readonly StudentCode $studentCode,
        private readonly Document $document,
        private readonly string $fullName,
    ) {}

    public function getStudentId(): StudentId
    {
        return $this->studentId;
    }

    public function getStudentCode(): StudentCode
    {
        return $this->studentCode;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getOccurredOn(): \DateTimeImmutable
    {
        return new \DateTimeImmutable;
    }
}
