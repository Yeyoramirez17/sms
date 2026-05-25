<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\Exceptions;

use DomainException;

final class UserNotFoundException extends DomainException
{
    public function __construct(string $message)
    {
        return parent::__construct($message);
    }

    public static function withId(string $userId): self
    {
        return new self("User with ID {$userId} not found.");
    }

    public static function withEmail(string $email): self
    {
        return new self("User with email {$email} not found.");
    }
}
