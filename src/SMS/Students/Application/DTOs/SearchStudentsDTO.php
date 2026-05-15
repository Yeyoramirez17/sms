<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\DTOs;

final readonly class SearchStudentsDTO
{
    public function __construct(
        public ?string $name = null,
        public ?string $documentNumber = null,
        public ?string $studentCode = null,
        public ?string $gender = null,
        public ?int $minAge = null,
        public ?int $maxAge = null,
        public ?string $eps = null,
        public int $page = 1,
        public int $perPage = 20,
        public string $orderBy = 'full_name',
        public string $orderDirection = 'asc',
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? null,
            documentNumber: $data['document_number'] ?? null,
            studentCode: $data['student_code'] ?? null,
            gender: $data['gender'] ?? null,
            minAge: isset($data['min_age']) ? (int) $data['min_age'] : null,
            maxAge: isset($data['max_age']) ? (int) $data['max_age'] : null,
            eps: $data['eps'] ?? null,
            page: isset($data['page']) ? max(1, (int) $data['page']) : 1,
            perPage: isset($data['per_page']) ? min(100, max(1, (int) $data['per_page'])) : 20,
            orderBy: $data['order_by'] ?? 'full_name',
            orderDirection: in_array($data['order_direction'] ?? 'asc', ['asc', 'desc']) ? $data['order_direction'] : 'asc',
        );
    }
}
