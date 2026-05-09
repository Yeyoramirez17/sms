<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\ValueObjects;

enum UserStatus: string
{
    case ACTIVE    = 'active';
    case INACTIVE  = 'inactive';
    case SUSPENDED = 'suspended';
    case PENDING_PASSWORD_CHANGE = 'pending_password_change';

    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }

    public function isInactive(): bool
    {
        return $this === self::INACTIVE;
    }

    public function isSuspended(): bool
    {
        return $this === self::SUSPENDED;
    }

    public function canLogin(): bool
    {
        return $this === self::ACTIVE || $this === self::PENDING_PASSWORD_CHANGE;
    }

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Activo',
            self::INACTIVE => 'Inactivo',
            self::SUSPENDED => 'Suspendido',
            self::PENDING_PASSWORD_CHANGE => 'Pendiente cambio de contaseña'
        };
    }
}
