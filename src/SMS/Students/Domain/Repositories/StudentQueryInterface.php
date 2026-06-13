<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\Repositories\StudentPaginatedResult;
use Src\SMS\Students\Domain\Repositories\StudentSearchCriteria;
use Src\SMS\Shared\Domain\ValueObjects\UserId;

/**
 * Interface StudentQueryInterface
 *
 * Defines read-only operations for student retrieval, searching, and pagination.
 */
interface StudentQueryInterface
{
    /**
     * Searches for students based on the provided criteria and returns a paginated result.
     *
     * @param  StudentSearchCriteria  $criteria  The criteria used to filter students.
     * @param  int  $page  The page number for pagination (default is 1).
     * @param  int  $perPage  The number of items per page for pagination (default is 20).
     * @return StudentPaginatedResult The paginated result containing the students that match the criteria.
     */
    public function searchWithPagination(StudentSearchCriteria $criteria, int $page = 1, int $perPage = 20): StudentPaginatedResult;

    /**
     * Finds students by their full name.
     *
     * @param  string  $name  The full name to search for.
     * @return array An array of students that match the given name.
     */
    public function findByName(string $name): array;

    /**
     * Finds a student by the linked user identifier.
     *
     * @param  UserId  $userId  The identifier of the associated user.
     * @return Student|null The student entity if found, or null when not found.
     */
    public function findByUserId(UserId $userId): ?Student;

    /**
     * Finds students within a specified age range.
     *
     * @param  int  $minAge  The minimum age to search for.
     * @param  int  $maxAge  The maximum age to search for.
     * @return array An array of students that match the given age range.
     */
    public function findByAgeRange(int $minAge, int $maxAge): array;

    /**
     * Retrieves all students with pagination support.
     *
     * @param  int  $page  The page number for pagination (default is 1).
     * @param  int  $perPage  The number of items per page for pagination (default is 20).
     * @return StudentPaginatedResult The paginated result containing all students.
     */
    public function findAll(int $page = 1, int $perPage = 20): StudentPaginatedResult;
}
