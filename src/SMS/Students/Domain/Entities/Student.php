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
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final class Student
{
    private StudentId $id;
    private Document $document;
    private FullName $fullName;
    private DateOfBirth $birthDate;
    private Gender $gender;
    private ?BloodType $bloodType;
    private ?Eps $eps;
    private ?string $address;
    private ?string $phone;
    private ?Email $email;
    private ?string $photoPath;
    private StudentCode $studentCode;
    private ?Attendant $attendant;

    private array $domainEvents = [];

    private function __construct(
        StudentId $id,
        Document $document,
        FullName $fullName,
        DateOfBirth $birthDate,
        Gender $gender,
        StudentCode $studentCode,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
        ?string $address = null,
        ?string $phone = null,
        ?Email $email = null,
        ?string $photoPath = null,
        ?Attendant $attendant = null
    ) {
        $this->id = $id;
        $this->document = $document;
        $this->fullName = $fullName;
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        $this->bloodType = $bloodType;
        $this->eps = $eps;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->photoPath = $photoPath;
        $this->studentCode = $studentCode;
        $this->attendant = $attendant;
    }

    public function getId(): StudentId
    {
        return $this->id;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getFullName(): FullName
    {
        return $this->fullName;
    }

    public function getBirthDate(): DateOfBirth
    {
        return $this->birthDate;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function getBloodType(): ?BloodType
    {
        return $this->bloodType;
    }

    public function getEps(): ?Eps
    {
        return $this->eps;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getEmail(): ?Email
    {
        return $this->email;
    }

    public function getPhotoPath(): ?string
    {
        return $this->photoPath;
    }

    public function getStudentCode(): StudentCode
    {
        return $this->studentCode;
    }

    public function getAttendant(): ?Attendant
    {
        return $this->attendant;
    }

    /**
     * Creates a new Student entity with the provided information.
     *
     * @param  StudentId  $id  The unique identifier of the student.
     * @param  Document  $document  The student's document information.
     * @param  FullName  $fullName  The student's full name.
     * @param  DateOfBirth  $birthDate  The student's date of birth.
     * @param  Gender  $gender  The student's gender.
     * @param  StudentCode  $studentCode  The student's unique code.
     * @param  BloodType|null  $bloodType  The student's blood type, if available.
     * @param  Eps|null  $eps  The student's EPS information, if available.
     * @param  string|null  $address  The student's address, if available.
     * @param  string|null  $phone  The student's phone number, if available.
     * @param  Email|null  $email  The student's email address, if available.
     * @param  string|null  $photoPath  The file path to the student's photo, if available.
     * @param  Attendant|null  $attendant  The student's attendant information, if available.
     *
     * @return self A new instance of the Student entity.
     */
    public static function create(
        Document $document,
        FullName $fullName,
        DateOfBirth $birthDate,
        Gender $gender,
        StudentCode $studentCode,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
        ?string $address = null,
        ?string $phone = null,
        ?Email $email = null,
        ?string $photoPath = null,
        ?Attendant $attendant = null
    ): self {
        $student = new self(
            new StudentId,
            $document,
            $fullName,
            $birthDate,
            $gender,
            $studentCode,
            $bloodType,
            $eps,
            $address,
            $phone,
            $email,
            $photoPath,
            $attendant
        );

        return $student;
    }

    /**
     * Reconstructs a Student entity for example from persisted data.
     *
     * @param  StudentId  $id  The unique identifier of the student.
     * @param  Document  $document  The student's document information.
     * @param  FullName  $fullName  The student's full name.
     * @param  DateOfBirth  $birthDate  The student's date of birth.
     * @param  Gender  $gender  The student's gender.
     * @param  StudentCode  $studentCode  The student's unique code.
     * @param  BloodType|null  $bloodType  The student's blood type, if available.
     * @param  Eps|null  $eps  The student's EPS information, if available.
     * @param  string|null  $address  The student's address, if available.
     * @param  string|null  $phone  The student's phone number, if available.
     * @param  Email|null  $email  The student's email address, if available.
     * @param  string|null  $photoPath  The file path to the student's photo, if available.
     * @param  Attendant|null  $attendant  The student's attendant information, if available.
     * @return self A reconstructed Student entity.
     */
    public static function reconstruct(
        StudentId $id,
        Document $document,
        FullName $fullName,
        DateOfBirth $birthDate,
        Gender $gender,
        StudentCode $studentCode,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
        ?string $address = null,
        ?string $phone = null,
        ?Email $email = null,
        ?string $photoPath = null,
        ?Attendant $attendant = null
    ): self {
        return new self(
            $id,
            $document,
            $fullName,
            $birthDate,
            $gender,
            $studentCode,
            $bloodType,
            $eps,
            $address,
            $phone,
            $email,
            $photoPath,
            $attendant
        );
    }

    public function calculateAge(): int
    {
        return $this->birthDate->calculateAge();
    }

    public function isAgeAppropriateForGrade(int $minAge, int $maxAge): bool
    {
        return $this->birthDate->isAgeAppropriate($minAge, $maxAge);
    }

    public function changeFullName(FullName $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function changeGender(Gender $gender): void
    {
        $this->gender = $gender;
    }

    public function hasValidEmail(): bool
    {
        return $this->email !== null;
    }

    public function hasValidParentEmail(): bool
    {
        return $this->attendant !== null && $this->attendant->email() !== null;
    }

    public function hasParentContact(): bool
    {
        return $this->attendant !== null && ($this->attendant->phone() !== null || $this->attendant->email() !== null);
    }

    public function changeAddress(string $newAddress): void
    {
        $this->address = trim($newAddress);
    }

    public function changePhone(string $newPhone): void
    {
        $this->phone = preg_replace('/[^0-9]/', '', $newPhone);
    }

    public function changeEmail(Email $newEmail): void
    {
        if ($this->email->equals($newEmail)) {
            return;
        }
        $this->email = $newEmail;
    }

    public function updateBloodType(?BloodType $bloodType): void
    {
        $this->bloodType = $bloodType;
    }

    public function updateEps(?Eps $eps): void
    {
        $this->eps = $eps;
    }

    public function updatePhoto(?string $photoPath): void
    {
        $this->photoPath = $photoPath;
    }

    public function updateAttendant(?Attendant $attendant): void
    {
        $this->attendant = $attendant;
    }

    public function changeParentEmail(?string $newEmail): void
    {
        if ($this->attendant === null) {
            return;
        }

        if ($this->attendant->email()->value() === $newEmail) {
            return;
        }

        $this->attendant = new Attendant(
            $this->attendant->name(),
            $this->attendant->relationship(),
            $this->attendant->phone(),
            new Email($newEmail)
        );
    }

    public function equals(Student $other): bool
    {
        return $this->id->equals($other->getId());
    }

    public function getDomainEvents(): array
    {
        return $this->domainEvents;
    }

    protected function recordEvent(object $event): void
    {
        $this->domainEvents[] = $event;
    }

    public function clearDomainEvents(): void
    {
        $this->domainEvents = [];
    }

    public function __toString(): string
    {
        return sprintf(
            '%s (%s) - %s',
            $this->fullName->value(),
            $this->studentCode->value(),
            $this->document
        );
    }
}
