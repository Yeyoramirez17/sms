<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

use function sprintf;

abstract class Uuid
{
    protected string $value;

    public function __construct(?string $value = null)
    {
        if ($value === null) {
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

    /**
     * Checks if this UUID is equal to another UUID.
     *
     * @param  self  $other  The other UUID to compare with.
     * @return bool True if both UUIDs are equal, false otherwise.
     */
    public function equals(self $other): bool
    {
        return $this->value === $other->value();
    }

    protected function generate(): string
    {
        return RamseyUuid::uuid4()->toString();
    }

    protected function validate(string $uuid): void
    {
        if (! RamseyUuid::isValid($uuid)) {
            throw new InvalidArgumentException(
                sprintf('Invalid uuid: %s', $uuid)
            );
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
