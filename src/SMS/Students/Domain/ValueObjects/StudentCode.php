<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use InvalidArgumentException;

final class StudentCode
{
    private string $value;

    /**
     * Default format for generating student codes.
     */
    public const DEFAULT_FORMAT = 'EST-{YEAR}-{SEQUENCE}';

    /**
     * Length of the sequence part in the generated student code.
     */
    public const SEQUENCE_LENGTH = 4;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function create(string $value): self
    {
        $value = strtoupper(trim($value));

        if (empty($value)) {
            throw new InvalidArgumentException('Student code cannot be empty');
        }

        if (strlen($value) > 20) {
            throw new InvalidArgumentException('Student code cannot exceed 20 characters');
        }

        if (! preg_match('/^[A-Z0-9\-]+$/', $value)) {
            throw new InvalidArgumentException(
                'Student code can only contain uppercase letters, numbers, and hyphens'
            );
        }

        return new self($value);
    }

    public static function generate(int $year, int $sequence): self
    {
        $sequenceStr = str_pad((string) $sequence, self::SEQUENCE_LENGTH, '0', STR_PAD_LEFT);
        $code = str_replace('{YEAR}', (string) $year, self::DEFAULT_FORMAT);
        $code = str_replace('{SEQUENCE}', $sequenceStr, $code);

        return new self($code);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function sequence(): int
    {
        if (preg_match('/-(\d+)$/', $this->value, $matches)) {
            return (int) $matches[1];
        }

        return 0;
    }

    public function year(): int
    {
        if (preg_match('/(\d{4})/', $this->value, $matches)) {
            return (int) $matches[1];
        }

        return 0;
    }

    public function equals(StudentCode $other): bool
    {
        return $this->value === $other->value();
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
