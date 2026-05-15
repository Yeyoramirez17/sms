<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Services;

use Src\SMS\Students\Domain\ValueObjects\StudentCode;

final class StudentCodeGenerator
{
    private const DEFAULT_FORMAT = 'EST-{YEAR}-{SEQUENCE}';

    private const SEQUENCE_LENGTH = 4;

    private int $nextSequence;

    public function __construct(int $startSequence = 1)
    {
        $this->nextSequence = $startSequence;
    }

    public function generate(int $year, ?string $format = null): StudentCode
    {
        $format = $format ?? self::DEFAULT_FORMAT;
        $sequenceStr = str_pad(
            (string) $this->nextSequence,
            self::SEQUENCE_LENGTH,
            '0',
            STR_PAD_LEFT
        );

        $code = str_replace('{YEAR}', (string) $year, $format);
        $code = str_replace('{SEQUENCE}', $sequenceStr, $code);

        $this->nextSequence++;

        return StudentCode::create($code);
    }

    public function setSequence(int $sequence): void
    {
        $this->nextSequence = $sequence;
    }

    public function getCurrentSequence(): int
    {
        return $this->nextSequence;
    }

    public static function parseCode(string $studentCode): array
    {
        $pattern = '/(\w+)-(\d{4})-(\d+)/';

        if (preg_match($pattern, $studentCode, $matches)) {
            return [
                'prefix' => $matches[1],
                'year' => (int) $matches[2],
                'sequence' => (int) $matches[3],
            ];
        }

        return [];
    }

    public static function extractYear(string $studentCode): ?int
    {
        $parsed = self::parseCode($studentCode);

        return $parsed['year'] ?? null;
    }

    public static function extractSequence(string $studentCode): ?int
    {
        $parsed = self::parseCode($studentCode);

        return $parsed['sequence'] ?? null;
    }
}
