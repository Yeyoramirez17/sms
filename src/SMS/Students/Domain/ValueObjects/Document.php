<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use InvalidArgumentException;

final class Document
{
    public const TYPE_TI = 'TI';

    public const TYPE_CC = 'CC';

    public const TYPE_CE = 'CE';

    public const VALID_TYPES = [
        self::TYPE_TI,
        self::TYPE_CC,
        self::TYPE_CE,
    ];

    private string $type;

    private string $number;

    public function __construct(string $type, string $number)
    {
        $this->validateType($type);
        $this->validateNumber($type, $number);

        $this->type = $type;
        $this->number = $this->normalizeNumber($number);
    }

    public function type(): string
    {
        return $this->type;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function equals(Document $other): bool
    {
        return $this->type === $other->type() && $this->number === $other->number();
    }

    private function validateType(string $type): void
    {
        if (! in_array($type, self::VALID_TYPES, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    'Invalid document type: %s. Valid types are: %s',
                    $type,
                    implode(', ', self::VALID_TYPES)
                )
            );
        }
    }

    private function validateNumber(string $type, string $number): void
    {
        if (empty(trim($number))) {
            throw new InvalidArgumentException('Document number cannot be empty');
        }

        $number = preg_replace('/[^0-9]/', '', $number);

        $minLength = match ($type) {
            self::TYPE_TI => 8,
            self::TYPE_CC => 6,
            self::TYPE_CE => 6,
            default => 6,
        };

        if (strlen($number) < $minLength) {
            throw new InvalidArgumentException(
                sprintf(
                    'Document number must be at least %d digits for type %s',
                    $minLength,
                    $type
                )
            );
        }

        if (strlen($number) > 15) {
            throw new InvalidArgumentException('Document number cannot exceed 15 digits');
        }
    }

    private function normalizeNumber(string $number): string
    {
        return preg_replace('/[^0-9]/', '', $number);
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->type, $this->number);
    }
}
