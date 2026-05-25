<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\ValueObjects;

enum Gender: string
{
    case MALE   = 'male';
    case FEMALE = 'female';
    case OTHER  = 'other';

    /**
     * Create a Gender enum instance from a string representation.
     *
     * @param  string  $gender  The string representation of the gender (e.g., 'M', 'F', 'O', 'male', 'female', 'other').
     * @return self The corresponding Gender enum instance.
     */
    public static function fromString(string $gender): self
    {
        $normalized = match ($gender) {
            'M', 'm', 'male'   => 'male',
            'F', 'f', 'female' => 'female',
            default            => 'other',
        };

        return self::from($normalized);
    }
}
