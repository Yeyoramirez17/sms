<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

use Src\SMS\Shared\Domain\ValueObjects\Email;

/**
 * Class Attendant
 *
 * Represents an attendant or guardian associated with a student, containing their name, relationship to the student, phone number, and email address.
 *
 * @package Src\SMS\Students\Domain\ValueObjects
 */
final class Attendant
{
    private string $name;
    private string $relationship;
    private ?string $phone;
    private ?Email $email;

    public function __construct(string $name, string $relationship, string $phone, ?Email $email = null)
    {
        $this->validateName($name);
        $this->name = trim($name);

        $this->validateRelationship($relationship);
        $this->relationship = trim($relationship);

        $this->phone = $phone;
        $this->email = $email;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function relationship(): ?string
    {
        return $this->relationship;
    }

    public function phone(): ?string
    {
        return $this->phone;
    }

    public function email(): ?Email
    {
        return $this->email;
    }

    private function validateName(string $name): void
    {
        $name = trim($name);

        if (empty($name)) {
            throw new \InvalidArgumentException('Name cannot be empty');
        }
        if (strlen($name) < 3) {
            throw new \InvalidArgumentException('Name must be at least 3 characters long');
        }
    }

    private function validateRelationship(string $relationship): void
    {
        $relationship = trim($relationship);

        if (empty($relationship)) {
            throw new \InvalidArgumentException('Relationship cannot be empty');
        }
        if (strlen($relationship) < 3) {
            throw new \InvalidArgumentException('Relationship must be at least 3 characters long');
        }
    }
}
