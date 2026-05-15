<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Entities;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Students\Domain\ValueObjects\Attendant;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\Gender;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;

class StudentBuilder
{
    private Document $document;

    private FullName $fullName;

    private DateOfBirth $birthDate;

    private Gender $gender;

    private StudentCode $studentCode;

    private ?Email $email = null;

    private ?BloodType $bloodType = null;

    private ?Eps $eps = null;

    private ?string $address = null;

    private ?string $phone = null;

    private ?string $photoPath = null;

    private ?Attendant $attendant = null;

    public function fullName(FullName $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function document(Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function birthDate(DateOfBirth $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function gender(Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function studentCode(StudentCode $studentCode): self
    {
        $this->studentCode = $studentCode;

        return $this;
    }

    public function email(?Email $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function phone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function bloodType(?BloodType $bloodType): self
    {
        $this->bloodType = $bloodType;

        return $this;
    }

    public function eps(?Eps $eps): self
    {
        $this->eps = $eps;

        return $this;
    }

    public function address(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function photoPath(?string $photoPath): self
    {
        $this->photoPath = $photoPath;

        return $this;
    }

    public function attendant(?Attendant $attendant): self
    {
        $this->attendant = $attendant;

        return $this;
    }

    public function build(): Student
    {
        return Student::create(
            document: $this->document,
            fullName: $this->fullName,
            birthDate: $this->birthDate,
            gender: $this->gender,
            studentCode: $this->studentCode,
            bloodType: $this->bloodType,
            eps: $this->eps,
            address: $this->address,
            phone: $this->phone,
            email: $this->email,
            photoPath: $this->photoPath,
            attendant: $this->attendant,
        );
    }
}
