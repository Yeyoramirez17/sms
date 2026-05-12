<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

use Src\SMS\Users\Domain\Entities\User;

final readonly class UserResponseDTO
{
    public function __construct(
        public string $id,
        public string $email,
        public string $role,
        public string $status,
        public string $createdAt = '',
    ) {}

    public static function fromEntity(User $user): self
    {
        return new self(
            id: $user->getId()->value(),
            email: $user->getEmail()->value(),
            role: $user->getRole()->value,
            status: $user->getStatus()->value,
        );
    }

    /**
     * @return array<string, string>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'role' => $this->role,
            'status' => $this->status,
            'created_at' => $this->createdAt,
        ];
    }
}
