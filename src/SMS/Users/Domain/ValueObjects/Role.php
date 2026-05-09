<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\ValueObjects;

enum Role: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN       = 'admin';
    case STUDENT     = 'student';
    case TEACHER     = 'teacher';
    case ATTENDANT   = 'attendant';

    public function label(): string
    {
        return match ($this) {
            self::SUPER_ADMIN => 'Super administrador',
            self::ADMIN       => 'Administrador',
            self::STUDENT     => 'Estudiante',
            self::TEACHER     => 'Docente',
            self::ATTENDANT   => 'Acudiente'
        };
    }
}
