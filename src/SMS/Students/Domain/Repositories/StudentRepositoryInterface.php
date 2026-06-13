<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

/**
 * Interface StudentRepositoryInterface
 *
 * Defines write-side persistence operations for the Student aggregate.
 *
 * This interface is responsible for creating, retrieving, deleting and verifying the
 * existence of student entities within the domain persistence layer.
 */
interface StudentRepositoryInterface
{
    /**
     * Saves a new student entity to storage.
     *
     * @param Student $student The student entity to persist.
     */
    public function save(Student $student): void;

    /**
     * Retrieves a student by its unique identifier.
     *
     * @param StudentId $studentId The identifier of the student.
     * @return Student|null The found student entity, or null if none exists.
     */
    public function findById(StudentId $studentId): ?Student;

    /**
     * Finds a student by document value.
     *
     * @param Document $document The document value to search for.
     * @return Student|null The matching student, or null if not found.
     */
    public function findByDocument(Document $document): ?Student;

    /**
     * Finds a student by student code.
     *
     * @param StudentCode $studentCode The student code to search for.
     * @return Student|null The matching student, or null if not found.
     */
    public function findByCode(StudentCode $studentCode): ?Student;

    /**
     * Deletes the provided student entity from storage.
     *
     * @param Student $student The student entity to delete.
     */
    public function delete(Student $student): void;

    /**
     * Checks whether a student already exists with the given document.
     *
     * @param Document $document The document to check.
     * @return bool True if a student exists with the document, false otherwise.
     */
    public function existsByDocument(Document $document): bool;

    /**
     * Checks whether a student already exists with the given student code.
     *
     * @param StudentCode $studentCode The student code to check.
     * @return bool True if a student exists with the student code, false otherwise.
     */
    public function existsByCode(StudentCode $studentCode): bool;
}
