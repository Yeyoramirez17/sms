<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use InvalidArgumentException;

final class BloodType
{
    public const A_POSITIVE = 'A+';

    public const A_NEGATIVE = 'A-';

    public const B_POSITIVE = 'B+';

    public const B_NEGATIVE = 'B-';

    public const AB_POSITIVE = 'AB+';

    public const AB_NEGATIVE = 'AB-';

    public const O_POSITIVE = 'O+';

    public const O_NEGATIVE = 'O-';

    public const VALID_TYPES = [
        self::A_POSITIVE,
        self::A_NEGATIVE,
        self::B_POSITIVE,
        self::B_NEGATIVE,
        self::AB_POSITIVE,
        self::AB_NEGATIVE,
        self::O_POSITIVE,
        self::O_NEGATIVE,
    ];

    private string $value;

    public function __construct(?string $value = null)
    {
        if ($value === null) {
            return;
        }

        $this->validate($value);
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function hasValue(): bool
    {
        return isset($this->value);
    }

    public function isPositive(): bool
    {
        return in_array($this->value, ['A+', 'B+', 'AB+', 'O+'], true);
    }

    public function canDonateTo(BloodType $recipient): bool
    {
        $donorCompatibility = [
            'O-' => ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'],
            'O+' => ['O+', 'A+', 'B+', 'AB+'],
            'A-' => ['A-', 'A+', 'AB-', 'AB+'],
            'A+' => ['A+', 'AB+'],
            'B-' => ['B-', 'B+', 'AB-', 'AB+'],
            'B+' => ['B+', 'AB+'],
            'AB-' => ['AB-', 'AB+'],
            'AB+' => ['AB+'],
        ];

        return in_array($recipient->value(), $donorCompatibility[$this->value] ?? [], true);
    }

    public function canReceiveFrom(BloodType $donor): bool
    {
        return $donor->canDonateTo($this);
    }

    public function equals(BloodType $other): bool
    {
        return $this->value === $other->value();
    }

    private function validate(string $value): void
    {
        if (! in_array($value, self::VALID_TYPES, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Invalid blood type: %s. Valid types are: %s',
                    $value,
                    implode(', ', self::VALID_TYPES)
                )
            );
        }
    }

    public function __toString(): string
    {
        return $this->value ?? '';
    }
}
