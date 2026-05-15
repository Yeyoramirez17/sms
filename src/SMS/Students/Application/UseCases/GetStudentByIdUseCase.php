<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final readonly class GetStudentByIdUseCase
{
    public function __construct(
        private StudentRepositoryInterface $studentRepository,
    ) {}

    public function execute(string $studentId): StudentResponseDTO
    {
        $id = new StudentId($studentId);

        $student = $this->studentRepository->findById($id);

        if ($student === null) {
            throw StudentNotFoundException::withId($studentId);
        }

        return StudentResponseDTO::fromEntity($student);
    }
}
