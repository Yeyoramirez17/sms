<?php

declare(strict_types=1);

namespace Tests\Unit\Users\Domain\Entities;

use PHPUnit\Framework\Attributes\TestDox;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Users\Domain\Entities\User;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Src\SMS\Users\Domain\ValueObjects\Role;
use Src\SMS\Users\Domain\ValueObjects\UserStatus;
use Tests\TestCase;

#[TestDox('User entity test.')]
final class UserTest extends TestCase
{
    /** @test */
    public function testCreateUserWithValidData(): void
    {
        $email = new Email('john.doe@example.com');
        $password = 'SecurePass123!';
        $role = Role::STUDENT;

        $user = User::create($email, $password, $role);

        $this->assertInstanceOf(User::class, $user);
        $this->assertTrue($user->getEmail()->equals($email));
        $this->assertTrue($user->getPassword()->verify($password));
        $this->assertTrue($user->getRole()->equals($role));
        $this->assertEquals(UserStatus::ACTIVE, $user->getStatus());
    }

    /** @test */
    #[TestDox("Test user reconstruction from persistence.")]
    public function test_reconstruct_user_from_persistence(): void
    {
        $userId = new UserId();
        $email = new Email('teacher@example.com');
        $password = Password::fromPlainText('SecurePass123!');
        $role = Role::TEACHER;
        $status = UserStatus::ACTIVE;

        $user = User::reconstruct($userId, $email, $password, $role, $status);

        $this->assertTrue($user->getId()->equals($userId));
        $this->assertTrue($user->getEmail()->equals($email));
        $this->assertTrue($user->getRole()->equals($role));
        $this->assertEquals($status, $user->getStatus());
    }

    /**
     * Test changing user password with correct current password
     */
    public function test_change_password_with_valid_current_password(): void
    {
        $currentPassword = 'CurrentPass123!';
        $newPassword = 'NewSecurePass456!';

        $user = User::create(
            new Email('admin@example.com'),
            $currentPassword,
            Role::ADMIN
        );
        $user->changePassword($currentPassword, $newPassword);

        $this->assertTrue($user->getPassword()->verify($newPassword));
        $this->assertFalse($user->getPassword()->verify($currentPassword));
    }

    /**
     * Test changing password fails with incorrect current password
     */
    public function test_change_password_with_incorrect_current_password(): void
    {
        $user = User::create(
            new Email('admin@example.com'),
            'CurrentPass123!',
            Role::ADMIN
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Current password is incorrect');

        $user->changePassword('WrongPassword123!', 'NewPass456!');
    }

    /**
     * Test changing user role
     */
    public function test_change_role(): void
    {
        $user = User::create(
            new Email('student@example.com'),
            'SecurePass123!',
            Role::STUDENT
        );

        $this->assertTrue($user->getRole()->equals(Role::STUDENT));

        $user->changeRole(Role::TEACHER);

        $this->assertTrue($user->getRole()->equals(Role::TEACHER));
    }

    /**
     * Test changing role to same role is idempotent
     */
    public function test_change_to_same_role_is_idempotent(): void
    {
        $user = User::create(
            new Email('student@example.com'),
            'SecurePass123!',
            Role::STUDENT
        );

        $user->changeRole(Role::STUDENT);

        $this->assertTrue($user->getRole()->equals(Role::STUDENT));
    }

    /**
     * Test suspending a user
     */
    public function test_suspend_user(): void
    {
        $user = User::create(
            new Email('student@example.com'),
            'SecurePass123!',
            Role::STUDENT
        );

        $this->assertEquals(UserStatus::ACTIVE, $user->getStatus());

        $user->suspend('Violated code of conduct');

        $this->assertEquals(UserStatus::SUSPENDED, $user->getStatus());
        $this->assertFalse($user->getStatus()->canLogin());
    }

    /**
     * Test activating a suspended user
     */
    public function test_activate_suspended_user(): void
    {
        $user = User::create(
            new Email('student@example.com'),
            'SecurePass123!',
            Role::STUDENT
        );

        $user->suspend();
        $this->assertEquals(UserStatus::SUSPENDED, $user->getStatus());

        $user->activate();

        $this->assertEquals(UserStatus::ACTIVE, $user->getStatus());
        $this->assertTrue($user->getStatus()->canLogin());
    }

    /**
     * Test deactivating a user
     */
    public function test_deactivate_user(): void
    {
        $user = User::create(
            new Email('student@example.com'),
            'SecurePass123!',
            Role::STUDENT
        );

        $user->deactivate();

        $this->assertEquals(UserStatus::INACTIVE, $user->getStatus());
        $this->assertFalse($user->getStatus()->canLogin());
    }

    /**
     * Test changing user email
     */
    public function test_change_email(): void
    {
        $oldEmail = new Email('old@example.com');
        $newEmail = new Email('new@example.com');

        $user = User::create($oldEmail, 'SecurePass123!', Role::STUDENT);

        $this->assertTrue($user->getEmail()->equals($oldEmail));

        $user->changeEmail($newEmail);

        $this->assertTrue($user->getEmail()->equals($newEmail));
    }

    /**
     * Test user equality based on user ID
     */
    public function test_user_equality(): void
    {
        $userId = new UserId;
        $email = new Email('test@example.com');
        $password = Password::fromPlainText('SecurePass123!');
        $role = Role::STUDENT;
        $status = UserStatus::ACTIVE;

        $user1 = User::reconstruct($userId, $email, $password, $role, $status);
        $user2 = User::reconstruct($userId, $email, $password, $role, $status);

        $this->assertTrue($user1->equals($user2));
    }

    /**
     * Test user string representation
     */
    public function test_user_string_representation(): void
    {
        $user = User::create(
            new Email('john@example.com'),
            'SecurePass123!',
            Role::TEACHER
        );

        $userString = (string) $user;

        $this->assertStringContainsString('john@example.com', $userString);
        $this->assertStringContainsString('teacher', $userString);
    }
}
