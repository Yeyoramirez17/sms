<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

/**
 * Eloquent User Model
 *
 * This model bridges the domain User entity with Laravel's authentication
 * and database layer. It follows Laravel conventions for authentication
 * while the domain entity remains framework-independent.
 *
 * @property string $id (UUID)
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $password (bcrypt hash)
 * @property string $role (super_admin, admin, teacher, student, attendant)
 * @property string $status (active, inactive, suspended, pending_password_change)
 * @property string|null $remember_token
 * @property Carbon|null $email_verified_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
#[Fillable(
    [
        'id',
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'status',
    ]
)]
#[Hidden(['password', 'remember_token'])]
final class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;
    use HasUuids;
    use Notifiable;
    use WithPagination;

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'password'   => 'hashed',
        ];
    }

    /**
     * Get the owning userable model (teacher or student).
     */
    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    /**
     * Get the student profile associated with the user.
     */
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    /**
     * Check if user is administrator
     */
    public function isAdmin(): bool
    {
        return $this->role === Role::ADMIN->value;
    }

    /**
     * Check if user is teacher
     */
    public function isTeacher(): bool
    {
        return $this->role === Role::TEACHER->value;
    }

    /**
     * Check if user is student
     */
    public function isStudent(): bool
    {
        return $this->role === Role::STUDENT->value;
    }

    /**
     * Check if user can login
     */
    public function canLogin(): bool
    {
        return in_array($this->status, ['active', 'pending_password_change'], true);
    }

    /**
     * Scope to only active users
     */
    public function scopeActive(Builder $query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope to only users with a specific role
     */
    public function scopeByRole(Builder $query, string $role)
    {
        return $query->where('role', $role);
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
    }
}
