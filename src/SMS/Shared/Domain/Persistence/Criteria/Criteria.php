<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria;

use Override;
use Src\SMS\Shared\Domain\Persistence\Criteria\Contracts\CriteriaInterface;
use Src\SMS\Shared\Domain\Persistence\Criteria\Sort;

/**
 * Value object representing a set of criteria for filtering, ordering, and paginating query results.
 */
class Criteria implements CriteriaInterface
{
    /** 
     * @var Criterion[] $filters An array of Criterion objects representing the filters to apply. 
     */
    protected array $filters = [];

    /**
     * @var Sort|null $sort An optional Sort object representing the sorting criterion.
     */
    protected ?Sort $sort;

    /**
     * @var Paginate|null $pagination An optional Paginate object representing the pagination parameters.
     */
    protected ?Paginate $pagination;

    #[Override]
    public function toArray(): array
    {
        $filters = array_map(
            fn(Criterion $c) => $c->toArray(),
            $this->filters
        );

        $result = ['filters' => $filters];

        if ($this->sort !== null) {
            $result['sort'] = [
                'field'     => $this->sort->field,
                'direction' => $this->sort->direction,
            ];
        }

        if ($this->pagination !== null) {
            $result['pagination'] = [
                'limit'  => $this->pagination->limit,
                'offset' => $this->pagination->offset,
            ];
        }
        return $result;
    }

    #[Override]
    public function hasCriterions(): bool
    {
        return !empty($this->filters);
    }

    #[Override]
    public function getCriterions(): array
    {
        return $this->filters;
    }

    #[Override]
    public function getSort(): ?Sort
    {
        return $this->sort;
    }

    #[Override]
    public function getPagination(): ?Paginate
    {
        return $this->pagination;
    }

    /**
     * Adds a new filter criterion to the criteria set.
     *
     * @param Criterion $criterion The criterion to add.
     * @return self A new instance of the criteria with the added filter.
     */
    public function addFilter(Criterion $criterion): self
    {
        $clone = clone $this;
        $clone->filters[] = $criterion;
        return $clone;
    }

    /**
     * Sets the sorting criterion for the criteria set.
     *
     * @param Sort $sort The sorting criterion to set.
     * @return self A new instance of the criteria with the specified sorting criterion.
     */
    public function sort(Sort $sort): self
    {
        $clone = clone $this;
        $clone->sort = $sort;
        return $clone;
    }

    /**
     * Sets the pagination parameters for the criteria set.
     *
     * @param Paginate $pagination The pagination parameters to set.
     * @return self A new instance of the criteria with the specified pagination parameters.
     */
    public function paginate(Paginate $pagination): self
    {
        $clone = clone $this;
        $clone->pagination = $pagination;
        return $clone;
    }
}
