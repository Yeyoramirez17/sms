<?php
declare(strict_types=1);

namespace Src\SMS\Users\Domain\Persistence;

readonly class UserPaginatedResult
{
    /**
     * UserPaginatedResult constructor.
     *
     * @param array $items The list of user items for the current page.
     * @param int $total The total number of user items across all pages.
     * @param int $currentPage The current page number.
     * @param int $perPage The number of items per page.
     * @param int $lastPage The last page number based on the total and perPage values.
     */
    public function __construct(
        public array $items,
        public int $total,
        public int $currentPage,
        public int $perPage,
        public int $lastPage
    )
    { }

    /**
     * Applies a mapping function to each item in the paginated result, returning a new instance of UserPaginatedResult with the mapped items.
     *
     * @param callable $mapper A function that takes an item and returns a mapped item.
     * @return UserPaginatedResult A new instance of UserPaginatedResult with the mapped items.
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
}