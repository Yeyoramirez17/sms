<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Events;

use Src\SMS\Students\Domain\ValueObjects\StudentId;

final class StudentUpdatedEvent
{
    public function __construct(
        private readonly StudentId $studentId,
        private readonly array $changedFields,
    ) {}

    public function getStudentId(): StudentId
    {
        return $this->studentId;
    }

    public function getChangedFields(): array
    {
        return $this->changedFields;
    }

    public function hasChanged(string $field): bool
    {
        return in_array($field, $this->changedFields, true);
    }

    public function getOccurredOn(): \DateTimeImmutable
    {
        return new \DateTimeImmutable;
    }
}
