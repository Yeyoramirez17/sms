<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Domain\Repositories\StudentQueryInterface;

final class GetStudentByUserIdUseCase
{
    public function __construct(
        private StudentQueryInterface $repository
    ) {}

    public function execute(string $userId): ?StudentResponseDTO
    {
        $userId = new UserId($userId);

        $student = $this->repository->findByUserId($userId);

        if (!$student) return null;

        return StudentResponseDTO::fromEntity($student);
    }
}
