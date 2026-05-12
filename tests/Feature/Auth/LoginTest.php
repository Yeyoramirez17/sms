<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_login_page(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('SMS-EDUCOL');
        $response->assertSee('Correo Electrónico');
        $response->assertSee('Contraseña');
    }

    public function test_user_can_login_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('ValidPassword123!'),
            'status' => 'active',
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_invalid_email(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('ValidPassword123!'),
        ]);

        $response = $this->post('/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_user_cannot_login_with_wrong_password(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('ValidPassword123!'),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'WrongPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_suspended_user_cannot_login(): void
    {
        $user = User::factory()->suspended()->create([
            'email' => 'suspended@example.com',
            'password' => bcrypt('ValidPassword123!'),
        ]);

        $response = $this->post('/login', [
            'email' => 'suspended@example.com',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_inactive_user_cannot_login(): void
    {
        $user = User::factory()->inactive()->create([
            'email' => 'inactive@example.com',
            'password' => bcrypt('ValidPassword123!'),
        ]);

        $response = $this->post('/login', [
            'email' => 'inactive@example.com',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_requires_email(): void
    {
        $response = $this->post('/login', [
            'email' => '',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_login_requires_password(): void
    {
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => '',
        ]);

        $response->assertSessionHasErrors('password');
    }

    public function test_login_requires_valid_email_format(): void
    {
        $response = $this->post('/login', [
            'email' => 'invalid-email',
            'password' => 'ValidPassword123!',
        ]);

        $response->assertSessionHasErrors('email');
    }
}