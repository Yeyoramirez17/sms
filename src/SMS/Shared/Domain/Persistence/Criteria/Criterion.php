<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria;

/**
 * Value object representing a single criterion for filtering query results.
 */
final class Criterion
{
    /**
     * Constructs a new Criterion instance.
     *
     * @param string $field The field to filter on.
     * @param Operator $operator The operator to use for the filter.
     * @param mixed $value The value to compare against.
     */
    private function __construct(
        public readonly string $field,
        public readonly Operator $operator,
        public readonly mixed $value,
    ) {}

    /**
     * Creates a new criterion for an EQUALS filter.
     *
     * @param string $field The field to filter on.
     * @param mixed $value The value to compare against.
     * @return self The new criterion instance.
     */
    public static function equals(string $field, mixed $value): self
    {
        return new self($field, Operator::EQUALS, $value);
    }

    /**
     * Creates a new criterion for a LIKE filter.
     *
     * @param string $field The field to filter on.
     * @param string $value The value to compare against.
     * @return self The new criterion instance.
     */
    public static function like(string $field, string $value): self
    {
        return new self($field, Operator::LIKE, "%{$value}%");
    }

    /**
     * Creates a new criterion for an IN filter.
     *
     * @param string $field The field to filter on.
     * @param array $values The values to compare against.
     * @return self The new criterion instance.
     */
    public static function in(string $field, array $values): self
    {
        return new self($field, Operator::IN, $values);
    }

    /**
     * Creates a new criterion for a BETWEEN filter.
     *
     * @param string $field The field to filter on.
     * @param mixed $min The minimum value to compare against.
     * @param mixed $max The maximum value to compare against.
     * @return self The new criterion instance.
     */
    public static function between(string $field, mixed $min, mixed $max): self
    {
        return new self($field, Operator::BETWEEN, [$min, $max]);
    }

    /**
     * Creates a new criterion for a GREATER THAN OR EQUALS filter.
     *
     * @param string $field The field to filter on.
     * @param mixed $value The value to compare against.
     * @return self The new criterion instance.
     */
    public static function gte(string $field, mixed $value): self
    {
        return new self($field, Operator::GREATER_THAN_OR_EQUALS, $value);
    }

    /**
     * Creates a new criterion for a LESS THAN OR EQUALS filter.
     *
     * @param string $field The field to filter on.
     * @param mixed $value The value to compare against.
     * @return self The new criterion instance.
     */
    public static function lte(string $field, mixed $value): self
    {
        return new self($field, Operator::LESS_THAN_OR_EQUALS, $value);
    }

    /**
     * Creates a new criterion for an IS NULL filter.
     *
     * @param string $field The field to filter on.
     * @return self The new criterion instance.
     */
    public static function isNull(string $field): self
    {
        return new self($field, Operator::IS_NULL, null);
    }

    /**
     * Converts the criterion to an array representation.
     *
     * @return array{field: string, operator: string, value: mixed} The array representation of the criterion.
     */
    public function toArray(): array
    {
        return [
            'field'    => $this->field,
            'operator' => $this->operator->value,
            'value'    => $this->value,
        ];
    }
}
