<?php

declare(strict_types=1);

namespace Src\SMS\Users\Domain\ValueObjects;

use InvalidArgumentException;

use function strlen;

final class Password
{
    private string $hash;

    private function __construct(string $value)
    {
        $this->hash = $value;
    }

    public static function fromPlainText(string $value): self
    {
        self::ensureIsStrongPassword($value);

        $hash = password_hash($value, PASSWORD_BCRYPT, ['cost' => 10]);

        if ($hash === false) {
            throw new InvalidArgumentException("The password hash could not be generated.");
        }

        return new self($hash);
    }

    public static function fromHash(string $hash): self
    {
        if (password_get_info($hash)['algoName'] !== 'bcrypt') {
            throw new InvalidArgumentException("The hash is not valid for the bcrypt algorithm.");
        }
        return new self($hash);
    }

    public static function fromExistingHash(string $hash): self
    {
        return new self($hash);
    }

    public function verify(string $passwordPlainText): bool
    {
        return password_verify($passwordPlainText, $this->hash);
    }

    /**
     * Check if this password is equal to another password (based on hash).
     *
     * @param Password $other
     * @return bool
     */
    public function equals(Password $other): bool
    {
        return $this->hash === $other->hash();
    }

    /**
     * Get the hashed password value.
     *
     * @return string
     */
    public function hash(): string
    {
        return $this->hash;
    }

    private static function ensureIsStrongPassword(string $passPlainText): void
    {
        if (strlen($passPlainText) < 8) {
            throw new InvalidArgumentException("Password must be at least 8 characters");
        }

        if (!preg_match('/[0-9]/', $passPlainText)) {
            throw new InvalidArgumentException("Password must contain at least one number.");
        }

        if (!preg_match('/[A-Z]/', $passPlainText) || !preg_match('/[a-z]/', $passPlainText)) {
            throw new InvalidArgumentException("Password must contain uppercase and lowercase letters");
        }
    }

    public function __toString(): string
    {
        return substr($this->hash, 0, 10) . '***';
    }
}
