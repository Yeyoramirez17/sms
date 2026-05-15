<?php

declare(strict_types=1);

namespace Tests\Unit\Shared\Domain\ValueObjects;

use InvalidArgumentException;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Tests\TestCase;

final class EmailTest extends TestCase
{
    /**
     * Test creating email with valid format
     */
    public function test_create_email_with_valid_format(): void
    {
        $emailString = 'john.doe@example.com';

        $email = new Email($emailString);

        $this->assertEquals($emailString, $email->value());
    }

    /**
     * Test creating email with uppercase is normalized to lowercase
     */
    public function test_email_normalized_to_lowercase(): void
    {
        $email = new Email('JOHN.DOE@EXAMPLE.COM');

        $this->assertEquals('john.doe@example.com', $email->value());
    }

    /**
     * Test email with whitespace is trimmed
     */
    public function test_email_with_whitespace_is_trimmed(): void
    {
        $email = new Email('  john.doe@example.com  ');

        $this->assertEquals('john.doe@example.com', $email->value());
    }

    /**
     * Test creating email with invalid format throws exception
     */
    public function test_invalid_email_format_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid email format');

        new Email('not-an-email');
    }

    /**
     * Test creating email without domain throws exception
     */
    public function test_email_without_domain_throws_exception(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Email('john@');
    }

    /**
     * Test email equality
     */
    public function test_email_equality(): void
    {
        $email1 = new Email('test@example.com');
        $email2 = new Email('test@example.com');

        $this->assertTrue($email1->equals($email2));
    }

    /**
     * Test email inequality
     */
    public function test_email_inequality(): void
    {
        $email1 = new Email('test1@example.com');
        $email2 = new Email('test2@example.com');

        $this->assertFalse($email1->equals($email2));
    }

    /**
     * Test email domain extraction
     */
    public function test_email_domain_extraction(): void
    {
        $email = new Email('john@example.com');

        $this->assertEquals('example.com', $email->getDomain());
    }

    /**
     * Test email string representation
     */
    public function test_email_string_representation(): void
    {
        $emailString = 'john@example.com';
        $email = new Email($emailString);

        $this->assertEquals($emailString, (string) $email);
    }
}
