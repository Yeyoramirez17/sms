<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\DTOs;

final readonly class CreateStudentDTO
{
    public function __construct(
        public string $documentType,
        public string $documentNumber,
        public string $firstName,
        public string $lastName,
        public string $birthDate,
        public string $gender,
        public ?string $bloodType = null,
        public ?string $epsName = null,
        public ?string $epsCode = null,
        public ?string $address = null,
        public ?string $phone = null,
        public ?string $email = null,
        public ?string $photoPath = null,
        public ?string $attendantName = null,
        public ?string $attendantRelationship = null,
        public ?string $attendantPhone = null,
        public ?string $attendantEmail = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            documentType: $data['document_type'] ?? '',
            documentNumber: $data['document_number'] ?? '',
            firstName: $data['first_name'] ?? '',
            lastName: $data['last_name'] ?? '',
            birthDate: $data['birth_date'] ?? '',
            gender: $data['gender'] ?? '',
            bloodType: $data['blood_type'] ?? null,
            epsName: $data['eps_name'] ?? null,
            epsCode: $data['eps_code'] ?? null,
            address: $data['address'] ?? null,
            phone: $data['phone'] ?? null,
            email: $data['email'] ?? null,
            photoPath: $data['photo_path'] ?? null,
            attendantName: $data['attendant_name'] ?? null,
            attendantRelationship: $data['attendant_relationship'] ?? null,
            attendantPhone: $data['attendant_phone'] ?? null,
            attendantEmail: $data['attendant_email'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'document_type' => $this->documentType,
            'document_number' => $this->documentNumber,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'birth_date' => $this->birthDate,
            'gender' => $this->gender,
            'blood_type' => $this->bloodType,
            'eps_name' => $this->epsName,
            'eps_code' => $this->epsCode,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'photo_path' => $this->photoPath,
            'attendant_name' => $this->attendantName,
            'attendant_relationship' => $this->attendantRelationship,
            'attendant_phone' => $this->attendantPhone,
            'attendant_email' => $this->attendantEmail,
        ];
    }
}
