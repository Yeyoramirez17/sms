<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

use Src\SMS\Users\Domain\ValueObjects\Role;

final readonly class CreateUserDTO
{
    public function __construct(
        public string $email,
        public string $firstName,
        public string $lastName,
        public string $plainPassword,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            email: $data['email'],
            firstName: $data['first_name'],
            lastName: $data['last_name'],
            plainPassword: $data['password'],
        );
    }
}
