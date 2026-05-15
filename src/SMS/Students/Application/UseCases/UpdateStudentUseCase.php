<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Application\DTOs\UpdateStudentDTO;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\ValueObjects\Attendant;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final readonly class UpdateStudentUseCase
{
    public function __construct(
        private StudentRepositoryInterface $studentRepository,
    ) {}

    public function execute(string $studentId, UpdateStudentDTO $dto): StudentResponseDTO
    {
        $id = new StudentId($studentId);
        $student = $this->studentRepository->findById($id);

        if ($student === null) {
            throw StudentNotFoundException::withId($studentId);
        }

        if ($dto->firstName !== null || $dto->lastName !== null) {
            $firstName = $dto->firstName ?? $student->getFullName()->firstName();
            $lastName = $dto->lastName ?? $student->getFullName()->lastName();
            $fullName = new FullName($firstName, $lastName);
            $student->changeFullName($fullName);
        }

        if ($dto->birthDate !== null) {
            $birthDate = new DateOfBirth($dto->birthDate);
        }

        if ($dto->bloodType !== null) {
            $bloodType = new BloodType($dto->bloodType);
            $student->updateBloodType($bloodType);
        } elseif ($dto->bloodType === '' && $student->getBloodType() !== null) {
            $student->updateBloodType(null);
        }

        if ($dto->epsName !== null) {
            $eps = new Eps($dto->epsName, $dto->epsCode);
            $student->updateEps($eps);
        } elseif ($dto->epsName === '' && $student->getEps() !== null) {
            $student->updateEps(null);
        }

        if ($dto->address !== null) {
            $student->changeAddress($dto->address);
        }

        if ($dto->phone !== null) {
            $student->changePhone($dto->phone);
        }

        if ($dto->email !== null) {
            $email = $dto->email !== '' ? new Email($dto->email) : null;
            $student->changeEmail($email);
        }

        if ($dto->photoPath !== null) {
            $student->updatePhoto($dto->photoPath !== '' ? $dto->photoPath : null);
        }

        if ($dto->attendantName !== null || $dto->attendantPhone !== null || $dto->attendantEmail !== null) {
            $attendantName          = $dto->attendantName         ?? $student->getAttendant()->name();
            $attendantRelationship  = $dto->attendantRelationship ?? $student->getAttendant()->relationship();
            $attendantPhone         = $dto->attendantPhone        ?? $student->getAttendant()->phone();
            $attendantEmail         = $dto->attendantEmail !== null
                ? ($dto->attendantEmail !== '' ? new Email($dto->attendantEmail) : null)
                : $student->getAttendant()->email();

            $student->updateAttendant(new Attendant($attendantName, $attendantRelationship, $attendantPhone, $attendantEmail));
        }

        $this->studentRepository->save($student);

        return StudentResponseDTO::fromEntity($student);
    }
}
