<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

/**
 * Interface StudentQueryInterface
 *
 * Defines the contract for querying student data with various criteria and pagination support.
 */
interface StudentQueryInterface
{
    /**
     * Searches for students based on the provided criteria and returns a paginated result.
     *
     * @param  StudentSearchCriteria  $criteria  The criteria to filter students.
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

class StudentSearchCriteria
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $documentNumber = null,
        public readonly ?string $studentCode = null,
        public readonly ?string $gender = null,
        public readonly ?int $minAge = null,
        public readonly ?int $maxAge = null,
        public readonly ?string $eps = null,
        public readonly ?string $orderBy = 'full_name',
        public readonly ?string $orderDirection = 'asc'
    ) {}
}

class StudentPaginatedResult
{
    public function __construct(
        public readonly array $items,
        public readonly int $total,
        public readonly int $currentPage,
        public readonly int $perPage,
        public readonly int $lastPage
    ) {}

    public static function empty(): self
    {
        return new self([], 0, 1, 20, 0);
    }
}
