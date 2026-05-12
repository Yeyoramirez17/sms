<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Eloquent User Model
 *
 * This model bridges the domain User entity with Laravel's authentication
 * and database layer. It follows Laravel conventions for authentication
 * while the domain entity remains framework-independent.
 *
 * @property string $id (UUID)
 * @property string $email
 * @property string $password (bcrypt hash)
 * @property string $role (super_admin, admin, teacher, student, attendant)
 * @property string $status (active, inactive, suspended, pending_password_change)
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
#[Fillable(['email', 'password', 'role', 'status', 'userable_type', 'userable_id', 'remember_token'])]
#[Hidden(['password', 'remember_token'])]
final class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;
    use HasUuids;
    use Notifiable;

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
        ];
    }

    /**
     * Get the userable entity (Student or Teacher)
     */
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Check if user is administrator
     */
    public function isAdmin(): bool
    {
        return in_array($this->role, ['super_admin', 'admin'], true);
    }

    /**
     * Check if user is teacher
     */
    public function isTeacher(): bool
    {
        return $this->role === 'teacher';
    }

    /**
     * Check if user is student
     */
    public function isStudent(): bool
    {
        return $this->role === 'student';
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
}
