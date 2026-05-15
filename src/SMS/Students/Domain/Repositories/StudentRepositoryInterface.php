<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

interface StudentRepositoryInterface
{
    public function save(Student $student): void;

    public function findById(StudentId $studentId): ?Student;

    public function findByDocument(Document $document): ?Student;

    public function findByCode(StudentCode $studentCode): ?Student;

    public function delete(Student $student): void;

    public function existsByDocument(Document $document): bool;

    public function existsByCode(StudentCode $studentCode): bool;
}
