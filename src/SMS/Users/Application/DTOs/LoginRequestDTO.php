<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

final readonly class LoginRequestDTO
{
    public function __construct(
        public string $email,
        public string $password,
        public bool $remember
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            email: $data['email'] ?? '',
            password: $data['password'] ?? '',
            remember: $data['remember'] ?? false
        );
    }
}
