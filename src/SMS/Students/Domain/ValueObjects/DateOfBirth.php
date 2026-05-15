<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use DateTimeImmutable;
use InvalidArgumentException;

final class DateOfBirth
{
    private DateTimeImmutable $value;

    private const MIN_AGE = 3;

    private const MAX_AGE = 25;

    public function __construct(string|DateTimeImmutable $value)
    {
        if (is_string($value)) {
            $this->value = $this->parseDate($value);
        } else {
            $this->value = $value;
        }

        $this->validate();
    }

    public function value(): DateTimeImmutable
    {
        return $this->value;
    }

    public function toString(string $format = 'Y-m-d'): string
    {
        return $this->value->format($format);
    }

    /**
     * Calculate the age based on the date of birth.
     *
     * @return int The calculated age in years.
     */
    public function calculateAge(): int
    {
        $now = new DateTimeImmutable;
        $interval = $this->value->diff($now);

        return $interval->y;
    }

    /**
     * Check if the age is appropriate for a given range.
     *
     * @param  int  $minAge  The minimum allowed age.
     * @param  int  $maxAge  The maximum allowed age.
     * @return bool True if the age is appropriate, false otherwise.
     */
    public function isAgeAppropriate(int $minAge, int $maxAge): bool
    {
        $age = $this->calculateAge();

        return $age >= $minAge && $age <= $maxAge;
    }

    public function equals(DateOfBirth $other): bool
    {
        return $this->value->format('Y-m-d') === $other->value()->format('Y-m-d');
    }

    private function parseDate(string $date): DateTimeImmutable
    {
        $parsed = DateTimeImmutable::createFromFormat('Y-m-d', $date);

        if ($parsed === false) {
            $parsed = DateTimeImmutable::createFromFormat('d/m/Y', $date);
        }

        if ($parsed === false) {
            throw new InvalidArgumentException(
                sprintf('Invalid date format: %s. Expected Y-m-d', $date)
            );
        }

        return $parsed;
    }

    private function validate(): void
    {
        $now = new DateTimeImmutable;

        if ($this->value > $now) {
            throw new InvalidArgumentException('Date of birth cannot be in the future');
        }

        $age = $this->calculateAge();

        if ($age < self::MIN_AGE) {
            throw new InvalidArgumentException(
                sprintf('Student must be at least %d years old', self::MIN_AGE)
            );
        }

        if ($age > self::MAX_AGE) {
            throw new InvalidArgumentException(
                sprintf('Student cannot be older than %d years', self::MAX_AGE)
            );
        }
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
