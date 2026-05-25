<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\ValueObjects;

enum Role: string
{
    case ADMIN       = 'admin';
    case STUDENT     = 'student';
    case TEACHER     = 'teacher';
    case ATTENDANT   = 'attendant';

    public function equals(Role $other): bool
    {
        return $this->value === $other->value;
    }

    public function label(): string
    {
        return match ($this) {
            self::ADMIN       => 'Administrador',
            self::STUDENT     => 'Estudiante',
            self::TEACHER     => 'Docente',
            self::ATTENDANT   => 'Acudiente'
        };
    }
}
