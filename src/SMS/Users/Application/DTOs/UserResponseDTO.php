<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\DTOs;

use Src\SMS\Users\Domain\Entities\User;

final readonly class UserResponseDTO
{
    public function __construct(
        public string $id,
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $role,
        public string $status,
        public ?\DateTimeImmutable $createdAt,
        public ?\DateTimeImmutable $updatedAt = null
    ) {}

    /**
     * Creates a UserResponseDTO from a User entity.
     *
     * @param User $user The user entity to convert.
     * @return self A new instance of UserResponseDTO populated with data from the User entity.
     */
    public static function fromEntity(User $user): self
    {
        return new self(
            id: $user->getId()->value(),
            firstName: $user->getName()->firstName(),
            lastName: $user->getName()->lastName(),
            email: $user->getEmail()->value(),
            role: $user->getRole()->value,
            status: $user->getStatus()->value,
            createdAt: $user->getCreatedAt()
        );
    }

    /**
     * Converts the DTO to an array.
     *
     * @return array<string, string>
     */
    public function toArray(): array
    {
        return [
            'id'         => $this->id,
            'email'      => $this->email,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
            'role'       => $this->role,
            'status'     => $this->status,
            'created_at' => $this->createdAt,
        ];
    }
}
