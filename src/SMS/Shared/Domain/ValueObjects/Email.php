<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use InvalidArgumentException;

final class Email
{
    private string $value;

    public function __construct(string $value)
    {
        $email = $this->normalize($value);

        if (! $this->validate($email)) {
            throw new InvalidArgumentException('Invalid email format');
        }

        $this->value = $email;
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

    public function __toString(): string
    {
        return $this->value;
    }

    private function validate(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
