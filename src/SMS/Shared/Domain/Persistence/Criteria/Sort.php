<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria;

/**
 * Value object representing a sorting criterion for query results, specifying the field to sort by and the direction of sorting (ascending or descending).
 */
final class Sort
{

    private function __construct(
        public readonly string $field,
        public readonly string $direction,
    ) {}

    /**
     * Creates a new Sort instance with the specified field and direction.
     *
     * @param string $field The field to sort by.
     * @param string $direction The direction of sorting ('asc' for ascending, 'desc' for descending).
     * @return self A new instance of Sort with the specified field and direction.
     */
    public static function new(string $field, string $direction): self
    {
        return new self($field, $direction);
    }

    /**
     * Creates an ascending sort criterion for the specified field.
     *
     * @param string $field The field to sort by.
     * @return self An instance of Sort representing the ascending sort.
     */
    public static function asc(string $field): self
    {
        return new self($field, 'asc');
    }

    /**
     * Creates a descending sort criterion for the specified field.
     *
     * @param string $field The field to sort by.
     * @return self An instance of Sort representing the descending sort.
     */
    public static function desc(string $field): self
    {
        return new self($field, 'desc');
    }
}
