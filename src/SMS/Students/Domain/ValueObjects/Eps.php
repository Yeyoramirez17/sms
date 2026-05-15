<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use InvalidArgumentException;

final class Eps
{
    private string $name;

    private ?string $code;

    public function __construct(string $name, ?string $code = null)
    {
        $this->validateName($name);
        $this->validateCode($code);

        $this->name = trim($name);
        $this->code = $code !== null ? strtoupper(trim($code)) : null;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function code(): ?string
    {
        return $this->code;
    }

    public function hasCode(): bool
    {
        return $this->code !== null;
    }

    public function equals(Eps $other): bool
    {
        if ($this->code !== null && $other->code !== null) {
            return $this->code === $other->code;
        }

        return strcasecmp($this->name, $other->name) === 0;
    }

    private function validateName(string $name): void
    {
        $name = trim($name);

        if (empty($name)) {
            throw new InvalidArgumentException('EPS name cannot be empty');
        }

        if (mb_strlen($name) > 100) {
            throw new InvalidArgumentException('EPS name cannot exceed 100 characters');
        }
    }

    private function validateCode(?string $code): void
    {
        if ($code === null) {
            return;
        }

        $code = trim($code);

        if (! empty($code) && strlen($code) > 10) {
            throw new InvalidArgumentException('EPS code cannot exceed 10 characters');
        }
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
