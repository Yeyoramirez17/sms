<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Persistence\Criteria;

use Illuminate\Database\Eloquent\Builder;
use Src\SMS\Shared\Domain\Persistence\Criteria\Contracts\CriteriaInterface;
use Src\SMS\Shared\Domain\Persistence\Criteria\Criterion;
use Src\SMS\Shared\Domain\Persistence\Criteria\Operator;

final class CriteriaToEloquentApplier
{

    /**
     * Applies the given criteria to the Eloquent query builder.
     *
     * @param Builder $query The Eloquent query builder instance to apply the criteria to.
     * @param CriteriaInterface $criteria The criteria to apply to the query builder.
     * @return \Illuminate\Database\Eloquent\Builder The modified Eloquent query builder instance with the applied criteria.
     */
    public function apply(Builder $query, CriteriaInterface $criteria): Builder
    {
        $criterions = $criteria->getCriterions();
        $sort       = $criteria->getSort();
        $pagination = $criteria->getPagination();

        if (!empty($criterions)) {
            foreach ($criterions as $criterion) {
                $query = $this->applyFilter($query, $criterion);
            }
        }

        if (!is_null($sort)) {
            $query->orderBy($sort->field, $sort->direction);
        }

        if (!is_null($pagination)) {
            $query->offset(max(0, $pagination->offset));
            $query->limit($pagination->limit);
        }

        return $query;
    }

    /**
     * Applies a single filter criterion to the Eloquent query builder.
     * 
     * @param Builder $query The Eloquent query builder instance to apply the filter to.
     * @param Criterion $criterion The criterion to apply as a filter to the query.
     * @return Builder The modified Eloquent query builder instance with the applied filter.
     */
    private function applyFilter(Builder $query, Criterion $criterion): Builder
    {
        $field    = $criterion->field;
        $operator = $criterion->operator;
        $value    = $criterion->value;

        return match ($operator) {
            Operator::EQUALS       => $query->where($field, $value),
            Operator::NOT_EQUALS   => $query->where($field, $operator->value, $value),
            Operator::GREATER_THAN => $query->where($field, $operator->value, $value),
            Operator::GREATER_THAN_OR_EQUALS => $query->where($field, $operator->value, $value),
            Operator::LESS_THAN    => $query->where($field, $operator->value, $value),
            Operator::LIKE         => $query->whereLike($field, $value, caseSensitive: true),
            Operator::ILIKE        => $query->whereLike($field, $value, caseSensitive: false),
            Operator::NOT_LIKE     => $query->whereNotLike($field, $value),
            Operator::IN           => $query->whereIn($field, $value),
            Operator::NOT_IN       => $query->whereNotIn($field, $value),
            Operator::BETWEEN      => $query->whereBetween($field, $value),
            Operator::NOT_BETWEEN  => $query->whereNotBetween($field, $value),
            Operator::IS_NULL      => $query->whereNull($field),
            Operator::IS_NOT_NULL  => $query->whereNotNull($field),
            default                => $query,
        };
    }
}
