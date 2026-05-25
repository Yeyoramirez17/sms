<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 14 students with linked profiles
        User::factory(14)->asStudent()->create();

        // Create one specific super admin user for testing (No student profile linked)
        User::factory()->asAdmin()->create([
            'first_name' => 'Admin',
            'last_name'  => 'User',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('MiPassword123'),
            'status'     => UserStatus::ACTIVE->value,
        ]);

        User::factory()->asStudent()->create([
            'first_name' => 'Student',
            'last_name'  => 'User',
            'email'      => 'student@example.com',
            'password'   => Hash::make('MiPassword123'),
            'status'     => UserStatus::ACTIVE->value,
        ]);
    }
}
