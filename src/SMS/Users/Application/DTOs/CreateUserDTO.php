<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

use Src\SMS\Users\Domain\ValueObjects\Role;

final readonly class CreateUserDTO
{
    public function __construct(
        public string $email,
        public string $plainPassword,
        public string $role,
    ) {}

    public function getRole(): Role
    {
        return Role::from($this->role);
    }

    public static function fromArray(array $data): self
    {
        return new self(
            email: $data['email'] ?? '',
            plainPassword: $data['password'] ?? '',
            role: $data['role'] ?? Role::STUDENT->value,
        );
    }
}
