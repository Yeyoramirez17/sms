<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\ValueObjects;

use DateTimeImmutable;

final class TimeStamp
{
    private ?\DateTimeImmutable $createdAt;
    private ?\DateTimeImmutable $updatedAt;

    public function __construct(DateTimeImmutable|string $createdAt, DateTimeImmutable|string $updatedAt)
    {
        $this->createdAt = $createdAt instanceof DateTimeImmutable ? $createdAt : new DateTimeImmutable($createdAt);
        $this->updatedAt = $updatedAt instanceof DateTimeImmutable ? $updatedAt : new DateTimeImmutable($updatedAt);
    }

    public function createdAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
