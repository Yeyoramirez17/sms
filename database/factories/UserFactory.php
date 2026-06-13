<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'id'             => fake()->uuid(),
            'first_name'     => fake()->firstName(),
            'last_name'      => fake()->lastName(),
            'email'          => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'       => static::$password ??= Hash::make('password'),
            'role'           => 'student',
            'status'         => fake()->randomElement(UserStatus::cases()),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Link the user to a student profile
     */
    public function asStudent(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role'    => Role::STUDENT->value,
            ];
        })->afterCreating(function (User $user) {
            Student::factory()->create(
                [
                    'user_id' => $user->id,    // Link the student profile to the user.
                    'institutional_email' => sprintf('%s.%s@school.edu', $user->first_name, $user->last_name),
                ]
            );
        });
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function asAdmin(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'admin',
        ]);
    }

    public function teacher(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'teacher',
        ]);
    }

    public function suspended(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => 'suspended',
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => 'inactive',
        ]);
    }
}
