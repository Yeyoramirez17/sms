<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\DTOs;

final readonly class UpdateStudentDTO
{
    public function __construct(
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $birthDate = null,
        public ?string $gender = null,
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
            firstName: $data['first_name'] ?? null,
            lastName: $data['last_name'] ?? null,
            birthDate: $data['birth_date'] ?? null,
            gender: $data['gender'] ?? null,
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
        return array_filter([
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
        ], fn($value) => $value !== null);
    }

    public function hasChanges(): bool
    {
        return ! empty($this->toArray());
    }
}
