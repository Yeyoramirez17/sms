<?php

declare(strict_types=1);

namespace Tests\Unit\Users\Domain\ValueObjects;

use InvalidArgumentException;
use Src\SMS\Users\Domain\ValueObjects\Password;
use Tests\TestCase;

final class PasswordTest extends TestCase
{
    /**
     * Test creating password from plain text with valid password
     */
    public function test_create_password_from_plain_text(): void
    {
        $plainPassword = 'SecurePass123!';

        $password = Password::fromPlainText($plainPassword);

        $this->assertInstanceOf(Password::class, $password);
        $this->assertTrue($password->verify($plainPassword));
    }

    /**
     * Test password verification works correctly
     */
    public function test_password_verification(): void
    {
        $plainPassword = 'MySecurePassword456!';
        $wrongPassword = 'WrongPassword123!';

        $password = Password::fromPlainText($plainPassword);

        $this->assertTrue($password->verify($plainPassword));
        $this->assertFalse($password->verify($wrongPassword));
    }

    /**
     * Test password too short throws exception
     */
    public function test_password_too_short_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('at least 8 characters');

        Password::fromPlainText('Short1!');
    }

    /**
     * Test password without number throws exception
     */
    public function test_password_without_number_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('at least one number');

        Password::fromPlainText('NoNumbers!Abcd');
    }

    /**
     * Test password without uppercase throws exception
     */
    public function test_password_without_uppercase_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('uppercase and lowercase letters');

        Password::fromPlainText('nouppercase123!');
    }

    /**
     * Test password without lowercase throws exception
     */
    public function test_password_without_lowercase_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('uppercase and lowercase letters');

        Password::fromPlainText('NOLOWERCASE123!');
    }

    /**
     * Test password equality
     */
    public function test_password_equality(): void
    {
        $hash = password_hash('ValidPassword123!', PASSWORD_BCRYPT, ['cost' => 10]);
        
        $password1 = Password::fromHash($hash);
        $password2 = Password::fromHash($hash);

        $this->assertTrue($password1->equals($password2));
    }

    /**
     * Test password from valid hash
     */
    public function test_password_from_valid_hash(): void
    {
        $plainPassword = 'ValidPassword123!';
        $hash = password_hash($plainPassword, PASSWORD_BCRYPT, ['cost' => 10]);

        $password = Password::fromHash($hash);

        $this->assertInstanceOf(Password::class, $password);
        $this->assertTrue($password->verify($plainPassword));
    }

    /**
     * Test password from invalid hash throws exception
     */
    public function test_password_from_invalid_hash_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('not valid for the bcrypt algorithm');

        Password::fromHash('invalid_hash_string');
    }

    /**
     * Test password hash getter
     */
    public function test_password_hash_getter(): void
    {
        $plainPassword = 'ValidPassword123!';
        $password = Password::fromPlainText($plainPassword);

        $hash = $password->hash();

        $this->assertIsString($hash);
        $this->assertNotEmpty($hash);
        $this->assertTrue(password_verify($plainPassword, $hash));
    }

    /**
     * Test password string representation does not expose hash
     */
    public function test_password_string_representation(): void
    {
        $plainPassword = 'ValidPassword123!';
        $password = Password::fromPlainText($plainPassword);

        $passwordString = (string) $password;

        $this->assertStringEndsWith('***', $passwordString);
        $this->assertStringNotContainsString($plainPassword, $passwordString);
    }
}
