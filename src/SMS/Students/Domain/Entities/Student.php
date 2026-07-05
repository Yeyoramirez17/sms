<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Entities;

use DateTimeImmutable;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Students\Domain\ValueObjects\Attendant;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\Gender;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

/**
 * Represents a student entity in the school management system.
 */
final class Student
{
    private StudentId $id;
    private UserId $userId;
    private Document $document;
    private DateOfBirth $birthDate;
    private Gender $gender;
    private string $address;
    private string $phone;
    private StudentCode $studentCode;
    private Email $institutionalEmail;
    private ?string $photoPath;
    private ?DateTimeImmutable $enrollmentDate;
    private ?Eps $eps;
    private ?BloodType $bloodType;
    private ?Attendant $attendant;

    private function __construct(
        StudentId $id,
        UserId $userId,
        Document $document,
        DateOfBirth $birthDate,
        Gender $gender,
        string $address,
        string $phone,
        StudentCode $studentCode,
        Email $institutionalEmail,
        ?string $photoPath = null,
        ?DateTimeImmutable $enrollmentDate = null,
        ?Attendant $attendant = null,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->document = $document;
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        $this->address = $address;
        $this->phone = $phone;
        $this->studentCode = $studentCode;
        $this->institutionalEmail = $institutionalEmail;
        $this->photoPath = $photoPath;
        $this->enrollmentDate = $enrollmentDate;
        $this->attendant = $attendant;
        $this->bloodType = $bloodType;
        $this->eps = $eps;
    }

    public function getId(): StudentId
    {
        return $this->id;
    }

    public function getUserId(): UserId
    {
        return $this->userId;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getBirthDate(): DateOfBirth
    {
        return $this->birthDate;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getStudentCode(): StudentCode
    {
        return $this->studentCode;
    }

    public function getInstitutionalEmail(): ?Email
    {
        return $this->institutionalEmail;
    }

    public function getPhotoPath(): ?string
    {
        return $this->photoPath;
    }

    public function getEnrollmentDate(): ?DateTimeImmutable
    {
        return $this->enrollmentDate;
    }

    public function getAttendant(): ?Attendant
    {
        return $this->attendant;
    }

    public function getEps(): ?Eps
    {
        return $this->eps;
    }

    public function getBloodType(): ?BloodType
    {
        return $this->bloodType;
    }

    /**
     * Creates a new Student entity with the provided information.
     *
     * @param  UserId  $userId  The unique identifier referenced from the User entity.
     * @param  Document  $document  The student's document information.
     * @param  DateOfBirth  $birthDate  The student's date of birth.
     * @param  Gender  $gender  The student's gender.
     * @param  string $address  The student's address, if available.
     * @param  string $phone  The student's phone number, if available.
     * @param  StudentCode  $studentCode  The student's unique code.
     * @param  Email $institutionalEmail  The student's institutional email address, if available.
     * @param  string|null  $photoPath  The file path to the student's photo, if available.
     * @param  DateTimeImmutable|null  $enrollmentDate  The date of the student's enrollment, if available.
     * @param  Attendant|null  $attendant  The student's attendant information, if available.
     * @param  BloodType|null  $bloodType  The student's blood type, if available.
     * @param  Eps|null  $eps  The student's EPS information, if available.
     *
     * @return self A new instance of the Student entity.
     */
    public static function create(
        UserId $userId,
        Document $document,
        DateOfBirth $birthDate,
        Gender $gender,
        string $address,
        string $phone,
        StudentCode $studentCode,
        Email $institutionalEmail,
        ?string $photoPath = null,
        ?DateTimeImmutable $enrollmentDate = null,
        ?Attendant $attendant = null,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
    ): self {
        return new self(
            new StudentId(),
            userId: $userId,
            document: $document,
            birthDate: $birthDate,
            gender: $gender,
            address: $address,
            phone: $phone,
            studentCode: $studentCode,
            institutionalEmail: $institutionalEmail,
            photoPath: $photoPath,
            enrollmentDate: $enrollmentDate,
            attendant: $attendant,
            bloodType: $bloodType,
            eps: $eps,
        );
    }

    /**
     * Reconstructs a Student entity for example from persisted data.
     *
     * @param  StudentId  $id  The unique identifier of the student.
     * @param  UserId  $userId  The unique identifier of the student.
     * @param  Document  $document  The student's document information.
     * @param  DateOfBirth  $birthDate  The student's date of birth.
     * @param  Gender  $gender  The student's gender.
     * @param  string  $address  The student's address, if available.
     * @param  string  $phone  The student's phone number, if available.
     * @param  StudentCode  $studentCode  The student's unique code.
     * @param  Email  $institutionalEmail  The student's institutional email address, if available.
     * @param  string|null  $photoPath  The file path to the student's photo, if available.
     * @param  DateTimeImmutable|null  $enrollmentDate  The date of the student's enrollment, if available.
     * @param  Attendant|null  $attendant  The student's attendant information, if available.
     * @param  BloodType|null  $bloodType  The student's blood type, if available.
     * @param  Eps|null  $eps  The student's EPS information, if available.
     * @return self A reconstructed Student entity.
     */
    public static function reconstruct(
        StudentId $id,
        UserId $userId,
        Document $document,
        DateOfBirth $birthDate,
        Gender $gender,
        string $address,
        string $phone,
        StudentCode $studentCode,
        Email $institutionalEmail,
        ?string $photoPath = null,
        ?DateTimeImmutable $enrollmentDate = null,
        ?Attendant $attendant = null,
        ?BloodType $bloodType = null,
        ?Eps $eps = null,
    ): self {
        return new self(
            id: $id,
            userId: $userId,
            document: $document,
            birthDate: $birthDate,
            gender: $gender,
            address: $address,
            phone: $phone,
            studentCode: $studentCode,
            institutionalEmail: $institutionalEmail,
            photoPath: $photoPath,
            enrollmentDate: $enrollmentDate,
            attendant: $attendant,
            bloodType: $bloodType,
            eps: $eps,
        );
    }

    /**
     * Calculates the student's age based on their date of birth.
     *
     * @return int The calculated age of the student.
     */
    public function calculateAge(): int
    {
        return $this->birthDate->calculateAge();
    }

    /**
     * Determines if the student's age falls within the specified range for a given grade level.
     *
     * @param int $minAge The minimum age for the grade level.
     * @param int $maxAge The maximum age for the grade level.
     * @return bool True if the student's age is appropriate for the grade level, false otherwise.
     */
    public function isAgeAppropriateForGrade(int $minAge, int $maxAge): bool
    {
        return $this->birthDate->isAgeAppropriate($minAge, $maxAge);
    }

    public function changeGender(Gender $gender): void
    {
        $this->gender = $gender;
    }

    public function hasValidEmail(): bool
    {
        return $this->institutionalEmail !== null;
    }

    public function hasValidParentEmail(): bool
    {
        return $this->attendant !== null && $this->attendant->email() !== null;
    }

    public function hasParentContact(): bool
    {
        return $this->attendant !== null &&
            ($this->attendant->phone() !== null ||
                $this->attendant->email() !== null);
    }

    public function changeAddress(string $newAddress): void
    {
        $this->address = trim($newAddress);
    }

    public function changePhone(string $newPhone): void
    {
        $this->phone = preg_replace("/[^0-9]/", "", $newPhone);
    }

    public function changeInstitutionalEmail(Email $newEmail): void
    {
        if ($this->institutionalEmail->equals($newEmail)) {
            return;
        }
        $this->institutionalEmail = $newEmail;
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
            new Email($newEmail),
        );
    }

    public function equals(Student $other): bool
    {
        return $this->id->equals($other->getId());
    }

    public function __toString(): string
    {
        return sprintf(
            "%s (%s) - %s",
            $this->institutionalEmail->value(),
            $this->studentCode->value(),
            $this->document,
        );
    }
}
