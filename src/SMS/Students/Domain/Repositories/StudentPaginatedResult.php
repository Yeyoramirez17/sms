<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

class StudentPaginatedResult
{
    public function __construct(
        public readonly array $items,
        public readonly int $total,
        public readonly int $currentPage,
        public readonly int $perPage,
        public readonly int $lastPage
    ) {}

    /**
     * Applies a mapping function to each item in the paginated result, returning a new instance of StudentPaginatedResult with the mapped items.
     *
     * @param callable $mapper A function that takes an item and returns a mapped item.
     * @return StudentPaginatedResult A new instance of StudentPaginatedResult with the mapped items.
     */
    public function map(callable $mapper): self
    {
        return new self(
            array_map($mapper, $this->items),
            $this->total,
            $this->currentPage,
            $this->perPage,
            $this->lastPage
        );
    }

    public static function empty(): self
    {
        return new self([], 0, 1, 20, 0);
    }
}
