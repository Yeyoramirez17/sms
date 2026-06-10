<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

final readonly class UserCriteriaDTO
{

    public function __construct(
        public ?string $firstName = null,
        public ?string $lastName  = null,
        public ?string $email     = null,
        public ?string $status    = null,
        public ?string $role      = null,
        public int $page          = 1,
        public int $perPage       = 10,
        public ?int $limit        = null,
        public ?int $offset       = null,
        public string $sort       = 'created_at',
        public string $order      = 'asc',
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['first_name'] ?? null,
            $data['last_name']  ?? null,
            $data['email']      ?? null,
            $data['status']     ?? null,
            $data['role']       ?? null,
            intval($data['page'] ?? 1),
            intval($data['per_page'] ?? 10),
            $data['limit']      ?? null,
            $data['offset']     ?? null,
            $data['order_by']   ?? 'created_at',
            $data['order_direction'] ?? 'asc',
        );
    }

    public function toArray(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email'     => $this->email,
            'status'    => $this->status,
            'role'      => $this->role,
            'page'      => $this->page,
            'per_page'  => $this->perPage,
            'limit'     => $this->limit,
            'offset'    => $this->offset,
            'order_by'  => $this->sort,
            'order_direction' => $this->order,
        ];
    }
}
