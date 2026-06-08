<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria\Contracts;

use Src\SMS\Shared\Domain\Persistence\Criteria\Criterion;
use Src\SMS\Shared\Domain\Persistence\Criteria\Paginate;
use Src\SMS\Shared\Domain\Persistence\Criteria\Sort;

/**
 * Interface representing a set of criteria for querying a data source.
 */
interface CriteriaInterface
{
    /**
     * It obtains the filtering conditions as a pure data structure.
     * 
     * ```php
     * [
     *     'filters' => [
     *         ['field' => 'email', 'operator' => '=', 'value' => 'test@test.com'],
     *         ['field' => 'status', 'operator' => '=', 'value' => 'active'],
     *     ],
     *     'sort' => ['field' => 'created_at', 'direction' => 'desc'],
     *     'pagination' => ['limit' => 20, 'offset' => 0],
     * ]
     * ```
     * 
     * @return array{filters: array{field: string, operator: string, value: mixed}, sort: array{field: string, direction: string}, pagination: ?array{limit: int, offset: int}} Structure conditions.
     */
    public function toArray(): array;

    /**
     * Checks if the criteria has any filters applied.
     *
     * @return bool True if the criteria has filters, false otherwise.
     */
    public function hasCriterions(): bool;

    /**
     * Retrieves the array of Criterion objects representing the filters applied in the criteria.
     *
     * @return Criterion[] An array of Criterion objects representing the filters applied in the criteria.
     */
    public function getCriterions(): array;

    /**
     * Retrieves the Sort object representing the sorting criterion.
     *
     * @return Sort|null The Sort object representing the sorting criterion, or null if no sorting is applied.
     */
    public function getSort(): ?Sort;

    /**
     * Retrieves the Paginate object representing the pagination parameters.
     *
     * @return Paginate|null The Paginate object representing the pagination parameters, or null if no pagination is applied.
     */
    public function getPagination(): ?Paginate;
}
