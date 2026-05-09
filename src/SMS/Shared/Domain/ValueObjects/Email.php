<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use InvalidArgumentException;

class Email
{
    private ?string $value;

    public function __construct(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email format');
        }

        $this->value = $this->normalize($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(Email $other): bool
    {
        return $this->value === $other->value();
    }

    public function getDomain(): string
    {
        return substr(strrchr($this->value, '@'), 1);
    }

    public function normalize(string $value): string
    {
        return strtolower(trim($value));
    }
}
