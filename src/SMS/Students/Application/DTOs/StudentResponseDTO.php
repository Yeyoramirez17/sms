<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\DTOs;

use Src\SMS\Students\Domain\Entities\Student;

final readonly class StudentResponseDTO
{
    public function __construct(
        public string $id,
        public string $userId,
        public string $documentType,
        public string $documentNumber,
        public string $birthDate,
        public int $age,
        public string $gender,
        public ?string $bloodType,
        public ?string $epsName,
        public ?string $epsCode,
        public ?string $address,
        public ?string $phone,
        public ?string $institutionalEmail,
        public ?string $studentCode,
        public ?string $photoPath,
        public ?string $attendantName,
        public ?string $attendantRelationship,
        public ?string $attendantPhone,
        public ?string $attendantEmail,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}

    public static function fromEntity(Student $student): self
    {
        $attendant = $student->getAttendant();

        return new self(
            id: $student->getId()->value(),
            userId: $student->getUserId()->value(),
            documentType: $student->getDocument()->type(),
            documentNumber: $student->getDocument()->number(),
            birthDate: $student->getBirthDate()->toString(),
            age: $student->calculateAge(),
            gender: $student->getGender()->value,
            bloodType: $student->getBloodType()?->value(),
            epsName: $student->getEps()?->name(),
            epsCode: $student->getEps()?->code(),
            address: $student->getAddress(),
            phone: $student->getPhone(),
            institutionalEmail: $student->getInstitutionalEmail()?->value(),
            studentCode: $student->getStudentCode()->value(),
            photoPath: $student->getPhotoPath(),
            attendantName: $attendant?->name(),
            attendantRelationship: $attendant?->relationship(),
            attendantPhone: $attendant?->phone(),
            attendantEmail: $attendant?->email()?->value(),
        );
    }

    public function toArray(): array
    {
        return [
            'id'              => $this->id,
            'user_id'         => $this->userId,
            'document_type'   => $this->documentType,
            'document_number' => $this->documentNumber,
            'birth_date'      => $this->birthDate,
            'age'             => $this->age,
            'gender'          => $this->gender,
            'blood_type'      => $this->bloodType,
            'eps_name'        => $this->epsName,
            'address'         => $this->address,
            'phone'           => $this->phone,
            'institutional_email' => $this->institutionalEmail,
            'student_code'    => $this->studentCode,
            'photo_path'      => $this->photoPath,
            'attendant_name'  => $this->attendantName,
            'attendant_relationship' => $this->attendantRelationship,
            'attendant_phone' => $this->attendantPhone,
            'attendant_email' => $this->attendantEmail,
            'created_at'      => $this->createdAt,
        ];
    }
}
