<?php

declare(strict_types=1);

namespace Src\SMS\Students\Domain\Repositories;

class StudentSearchCriteria
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $documentNumber = null,
        public readonly ?string $studentCode = null,
        public readonly ?string $gender = null,
        public readonly ?int $minAge = null,
        public readonly ?int $maxAge = null,
        public readonly ?string $eps = null,
        public readonly ?string $orderBy = 'first_name',
        public readonly ?string $orderDirection = 'asc'
    ) {}
}
