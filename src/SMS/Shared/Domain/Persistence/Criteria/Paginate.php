<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria;

final class Paginate
{
    /**
     * Value object representing pagination parameters for query results, including the limit (number of items per page) and offset (number of items to skip).
     *
     * @param int $limit The maximum number of items to return.
     * @param int $offset The number of items to skip before starting to collect the result set.
     */
    private function __construct(
        public readonly int $limit,
        public readonly int $offset
    ) {}

    /**
     * Creates a new Paginate instance with the specified limit and offset.
     *
     * @param int $limit The maximum number of items to return.
     * @param int $offset The number of items to skip before starting to collect the result set.
     * @return self A new instance of Paginate with the specified limit and offset.
     */
    public static function create(int $limit, int $offset): self
    {
        return new self($limit, $offset);
    }
}
