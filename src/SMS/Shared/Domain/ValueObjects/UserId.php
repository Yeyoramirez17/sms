<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

final class UserId
{
    private string $value;

    public function __construct(?string $value = null)
    {
        if ($value == null) {
            $this->value = $this->generate();
        } else {
            $this->validate($value);
            $this->value = $value;
        }
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(UserId $other): bool
    {
        return $this->value === $other->value();
    }

    public function generate(): string
    {
        return Uuid::uuid4()->toString();
    }

    public function validate(string $uuid): void
    {
        if (!Uuid::isValid($uuid)) {
            throw new InvalidArgumentException(
                sprintf("Invalid uuid: %s", $uuid)
            );
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
