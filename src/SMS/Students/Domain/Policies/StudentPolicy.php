<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Policies;

use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\ValueObjects\Role;

final class StudentPolicy
{
    public function canView(User $user, Student $student): bool
    {
        if ($this->isAdmin($user)) {
            return true;
        }

        if ($this->isTeacher($user)) {
            return true;
        }

        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {
            return true;
        }

        return false;
    }

    public function canCreate(User $user): bool
    {
        return $this->isAdmin($user);
    }

    public function canUpdate(User $user, Student $student): bool
    {
        if ($this->isAdmin($user)) {
            return true;
        }

        if ($this->isTeacher($user)) {
            return true;
        }

        return false;
    }

    public function canDelete(User $user, Student $student): bool
    {
        return $this->isAdmin($user);
    }

    public function canEnroll(User $user, Student $student): bool
    {
        return $this->isAdmin($user);
    }

    public function canViewGrades(User $user, Student $student): bool
    {
        if ($this->isAdmin($user)) {
            return true;
        }

        if ($this->isTeacher($user)) {
            return true;
        }

        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {
            return true;
        }

        return false;
    }

    public function canViewAttendance(User $user, Student $student): bool
    {
        if ($this->isAdmin($user)) {
            return true;
        }

        if ($this->isTeacher($user)) {
            return true;
        }

        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {
            return true;
        }

        return false;
    }

    public function canExport(User $user): bool
    {
        return $this->isAdmin($user);
    }

    private function isAdmin(User $user): bool
    {
        return $user->getRole() === Role::ADMIN || $user->getRole() === Role::SUPER_ADMIN;
    }

    private function isTeacher(User $user): bool
    {
        return $user->getRole() === Role::TEACHER;
    }

    private function isStudent(User $user): bool
    {
        return $user->getRole() === Role::STUDENT;
    }

    private function isOwnRecord(User $user, Student $student): bool
    {
        return $user->getId()->value() === $student->getId()->value();
    }
}
