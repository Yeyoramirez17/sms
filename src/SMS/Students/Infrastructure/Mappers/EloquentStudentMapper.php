<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Mappers;

use App\Models\Student as StudentEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Shared\Domain\ValueObjects\UserId;
use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\ValueObjects\Attendant;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\Gender;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final class EloquentStudentMapper
{
    public function toDomain(StudentEloquent $model): Student
    {
        $id         = new StudentId($model->id);
        $userId     = new UserId($model->user_id);
        $document   = new Document($model->document_type, $model->document_number);
        $birthDate  = new DateOfBirth($model->birth_date->format('Y-m-d'));
        $studentCode = StudentCode::create($model->student_code);

        $institutionalEmail = new Email($model->institutional_email);

        $bloodType = $model->blood_type !== null
            ? new BloodType($model->blood_type)
            : null;

        $eps = $model->eps_name !== null
            ? new Eps($model->eps_name, $model->eps_code)
            : null;

        $attendant = null;

        if ($model->attendant_name !== null && $model->attendant_relationship !== null) {
            $attendantEmail = $model->attendant_email !== null
                ? new Email($model->attendant_email)
                : null;

            $attendant = new Attendant(
                name: $model->attendant_name,
                relationship: $model->attendant_relationship,
                phone: $model->attendant_phone,
                email: $attendantEmail,
            );
        }

        $gender = Gender::fromString($model->gender);

        $enrollmentDate = $model->enrollment_date
            ? $model->enrollment_date->toDateTimeImmutable()
            : null;

        return Student::reconstruct(
            id: $id,
            userId: $userId,
            document: $document,
            birthDate: $birthDate,
            gender: $gender,
            address: $model->address,
            phone: $model->phone,
            studentCode: $studentCode,
            institutionalEmail: $institutionalEmail,
            photoPath: $model->photo_path,
            enrollmentDate: $enrollmentDate,
            attendant: $attendant,
            bloodType: $bloodType,
            eps: $eps,
        );
    }

    public function toEloquent(Student $student): array
    {
        $attendant = $student->getAttendant();

        return [
            'id'              => $student->getId()->value(),
            'user_id'         => $student->getUserId()->value(),
            'student_code'    => $student->getStudentCode()->value(),
            'document_type'   => $student->getDocument()->type(),
            'document_number' => $student->getDocument()->number(),
            'birth_date'      => $student->getBirthDate()->toString(),
            'gender'          => $student->getGender()->value,
            'phone'           => $student->getPhone(),
            'address'         => $student->getAddress(),
            'institutionalEmail' => $student->getInstitutionalEmail()?->value(),
            'photo_path'      => $student->getPhotoPath(),
            'eps_name'        => $student->getEps()?->name(),
            'eps_code'        => $student->getEps()?->code(),
            'blood_type'      => $student->getBloodType()?->value(),
            'attendant_name'  => $attendant?->name(),
            'attendant_relationship' => $attendant?->relationship(),
            'attendant_phone' => $attendant?->phone(),
            'attendant_email' => $attendant?->email()?->value(),
            'enrollment_date' => $student->getEnrollmentDate()?->format('Y-m-d'),
        ];
    }
}
