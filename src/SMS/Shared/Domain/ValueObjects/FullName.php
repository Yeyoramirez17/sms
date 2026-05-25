<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use InvalidArgumentException;

/**
 * Value Object representing a user's full name.
 *
 * This class encapsulates the first name and last name of a student, providing
 * validation, normalization, and utility methods related to the full name.
 */
final class FullName
{
    private string $firstName;

    private string $lastName;

    private string $fullName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->validate($firstName);
        $this->validate($lastName);

        $this->firstName = $this->normalize($firstName);
        $this->lastName = $this->normalize($lastName);
        $this->fullName = trim(sprintf('%s %s', $this->firstName, $this->lastName));
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }

    public function value(): string
    {
        return $this->fullName;
    }

    public function equals(FullName $other): bool
    {
        return $this->firstName === $other->firstName()
            && $this->lastName === $other->lastName();
    }

    public function initials(): string
    {
        return sprintf(
            '%s%s',
            strtoupper(substr($this->firstName, 0, 1)),
            strtoupper(substr($this->lastName, 0, 1))
        );
    }

    private function validate(string $value): void
    {
        $value = trim($value);

        if (empty($value)) {
            throw new InvalidArgumentException('First name cannot be empty');
        }

        if (mb_strlen($value) > 50) {
            throw new InvalidArgumentException('First name cannot exceed 50 characters');
        }
    }

    private function normalize(string $name): string
    {
        $name = trim($name);
        $name = preg_replace('/\s+/', ' ', $name);

        return mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    }

    public function __toString(): string
    {
        return $this->fullName;
    }
}
