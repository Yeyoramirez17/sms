<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Mappers;

use App\Models\Student as StudentEloquent;
use Src\SMS\Shared\Domain\ValueObjects\Email;
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
        $document   = new Document($model->document_type, $model->document_number);
        $fullName   = new FullName($model->first_name, $model->last_name);
        $birthDate  = new DateOfBirth($model->birth_date->format('Y-m-d'));
        $studentCode = StudentCode::create($model->student_code);

        $email = new Email($model->email);

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

        return Student::reconstruct(
            id: $id,
            document: $document,
            fullName: $fullName,
            birthDate: $birthDate,
            gender: $gender,
            studentCode: $studentCode,
            bloodType: $bloodType,
            eps: $eps,
            address: $model->address,
            phone: $model->phone,
            email: $email,
            photoPath: $model->photo_path,
            attendant: $attendant
        );
    }

    public function toEloquent(Student $student): array
    {
        $attendant = $student->getAttendant();

        return [
            'id'              => $student->getId()->value(),
            'student_code'    => $student->getStudentCode()->value(),
            'document_type'   => $student->getDocument()->type(),
            'document_number' => $student->getDocument()->number(),
            'first_name'      => $student->getFullName()->firstName(),
            'last_name'       => $student->getFullName()->lastName(),
            'birth_date'      => $student->getBirthDate()->toString(),
            'gender'          => $student->getGender()->value,
            'blood_type'      => $student->getBloodType()?->value(),
            'eps_name'        => $student->getEps()?->name(),
            'eps_code'        => $student->getEps()?->code(),
            'email'           => $student->getEmail()?->value(),
            'phone'           => $student->getPhone(),
            'address'         => $student->getAddress(),
            'photo_path'      => $student->getPhotoPath(),
            'attendant_name'  => $attendant?->name(),
            'attendant_relationship' => $attendant?->relationship(),
            'attendant_phone' => $attendant?->phone(),
            'attendant_email' => $attendant?->email()?->value(),
        ];
    }
}
