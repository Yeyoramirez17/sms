<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Students\Application\DTOs\CreateStudentDTO;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\Exceptions\DuplicateDocumentException;
use Src\SMS\Students\Domain\Exceptions\DuplicateStudentCodeException;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\Services\StudentCodeGenerator;
use Src\SMS\Students\Domain\ValueObjects\Attendant;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\Gender;

final readonly class CreateStudentUseCase
{
    public function __construct(
        private StudentRepositoryInterface $studentRepository,
        private StudentCodeGenerator $codeGenerator,
    ) {}

    public function execute(CreateStudentDTO $dto): StudentResponseDTO
    {
        $document = new Document($dto->documentType, $dto->documentNumber);

        if ($this->studentRepository->existsByDocument($document)) {
            throw DuplicateDocumentException::withDocumentObject(
                $dto->documentType,
                $dto->documentNumber
            );
        }

        $fullName = new FullName($dto->firstName, $dto->lastName);
        $birthDate = new DateOfBirth($dto->birthDate);
        $studentCode = $this->codeGenerator->generate((int) date('Y'));

        if ($this->studentRepository->existsByCode($studentCode)) {
            throw DuplicateStudentCodeException::withCode($studentCode->value());
        }

        $bloodType   = $dto->bloodType !== null ? new BloodType($dto->bloodType) : null;
        $eps         = $dto->epsName   !== null ? new Eps($dto->epsName, $dto->epsCode) : null;
        $email       = $dto->email     !== null ? new Email($dto->email) : null;

        // Attendant data
        $attendant = null;
        if ($dto->attendantName !== null || $dto->attendantRelationship !== null || $dto->attendantPhone !== null || $dto->attendantEmail !== null) {
            $attendantEmail = $dto->attendantEmail !== null ? new Email($dto->attendantEmail) : null;
            $attendant = new Attendant(
                $dto->attendantName,
                $dto->attendantRelationship,
                $dto->attendantPhone,
                $attendantEmail
            );
        }

        $gender = Gender::fromString($dto->gender);

        $student = Student::create(
            document: $document,
            fullName: $fullName,
            birthDate: $birthDate,
            gender: $gender,
            studentCode: $studentCode,
            bloodType: $bloodType,
            eps: $eps,
            address: $dto->address,
            phone: $dto->phone,
            email: $email,
            photoPath: $dto->photoPath,
            attendant: $attendant
        );

        $this->studentRepository->save($student);

        return StudentResponseDTO::fromEntity($student);
    }
}
