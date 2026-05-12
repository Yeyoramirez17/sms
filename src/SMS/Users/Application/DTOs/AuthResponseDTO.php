<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

use Src\SMS\Users\Domain\Entities\User;

final readonly class AuthResponseDTO
{
    public function __construct(
        public string $userId,
        public string $email,
        public string $role,
        public string $roleLabel,
        public string $status,
        public ?string $token = null,
    ) {}

    public static function fromEntity(User $user, ?string $token = null): self
    {
        return new self(
            userId: $user->getId()->value(),
            email: $user->getEmail()->value(),
            role: $user->getRole()->value,
            roleLabel: $user->getRole()->label(),
            status: $user->getStatus()->value,
            token: $token,
        );
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'email' => $this->email,
            'role' => $this->role,
            'role_label' => $this->roleLabel,
            'status' => $this->status,
            'token' => $this->token,
        ];
    }
}
