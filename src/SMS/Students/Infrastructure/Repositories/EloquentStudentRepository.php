<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Repositories;

use App\Models\Student as StudentEloquent;
use Src\SMS\Students\Domain\Entities\Student;
use Src\SMS\Students\Domain\Repositories\StudentPaginatedResult;
use Src\SMS\Students\Domain\Repositories\StudentQueryInterface;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\Repositories\StudentSearchCriteria;
use Src\SMS\Students\Domain\ValueObjects\Document;
use Src\SMS\Students\Domain\ValueObjects\StudentCode;
use Src\SMS\Students\Domain\ValueObjects\StudentId;
use Src\SMS\Students\Infrastructure\Mappers\EloquentStudentMapper;

final class EloquentStudentRepository implements StudentQueryInterface, StudentRepositoryInterface
{
    public function __construct(
        private EloquentStudentMapper $mapper,
    ) {}

    public function save(Student $student): void
    {
        $data = $this->mapper->toEloquent($student);

        StudentEloquent::updateOrCreate(
            ['id' => $data['id']],
            $data
        );
    }

    public function findById(StudentId $studentId): ?Student
    {
        $model = StudentEloquent::find($studentId->value());

        if ($model === null) {
            return null;
        }

        return $this->mapper->toDomain($model);
    }

    public function findByDocument(Document $document): ?Student
    {
        $model = StudentEloquent::where('document_type', $document->type())
            ->where('document_number', $document->number())
            ->first();

        if ($model === null) {
            return null;
        }

        return $this->mapper->toDomain($model);
    }

    public function findByCode(StudentCode $studentCode): ?Student
    {
        $model = StudentEloquent::where('student_code', $studentCode->value())->first();

        if ($model === null) {
            return null;
        }

        return $this->mapper->toDomain($model);
    }

    public function delete(Student $student): void
    {
        StudentEloquent::where('id', $student->getId()->value())->delete();
    }

    public function existsByDocument(Document $document): bool
    {
        return StudentEloquent::where('document_type', $document->type())
            ->where('document_number', $document->number())
            ->exists();
    }

    public function existsByCode(StudentCode $studentCode): bool
    {
        return StudentEloquent::where('student_code', $studentCode->value())->exists();
    }

    public function searchWithPagination(StudentSearchCriteria $criteria, int $page = 1, int $perPage = 20): StudentPaginatedResult
    {
        $query = StudentEloquent::query();

        if ($criteria->name !== null) {
            $query->where(function ($q) use ($criteria) {
                $q->where('first_name', 'ilike', "%{$criteria->name}%")
                    ->orWhere('last_name', 'ilike', "%{$criteria->name}%");
            });
        }

        if ($criteria->documentNumber !== null) {
            $query->where('document_number', 'ilike', "%{$criteria->documentNumber}%");
        }

        if ($criteria->studentCode !== null) {
            $query->where('student_code', 'ilike', "%{$criteria->studentCode}%");
        }

        if ($criteria->gender !== null) {
            $query->where('gender', $criteria->gender);
        }

        if ($criteria->eps !== null) {
            $query->where('eps_name', 'ilike', "%{$criteria->eps}%");
        }

        $orderColumn = match ($criteria->orderBy) {
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'student_code' => 'student_code',
            'created_at' => 'created_at',
            default => 'first_name',
        };

        $query->orderBy($orderColumn, $criteria->orderDirection ?? 'asc');

        $total = $query->count();
        $lastPage = (int) ceil($total / $perPage);

        $models = $query->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();

        $items = $models->map(fn ($model) => $this->mapper->toDomain($model))->toArray();

        return new StudentPaginatedResult(
            items: $items,
            total: $total,
            currentPage: $page,
            perPage: $perPage,
            lastPage: $lastPage
        );
    }

    public function findByName(string $name): array
    {
        $models = StudentEloquent::where('first_name', 'ilike', "%{$name}%")
            ->orWhere('last_name', 'ilike', "%{$name}%")
            ->limit(50)
            ->get();

        return $models->map(fn ($model) => $this->mapper->toDomain($model))->toArray();
    }

    public function findByAgeRange(int $minAge, int $maxAge): array
    {
        $maxDate = now()->subYears($minAge)->format('Y-m-d');
        $minDate = now()->subYears($maxAge + 1)->format('Y-m-d');

        $models = StudentEloquent::whereBetween('birth_date', [$minDate, $maxDate])->get();

        return $models->map(fn ($model) => $this->mapper->toDomain($model))->toArray();
    }

    public function findAll(int $page = 1, int $perPage = 20): StudentPaginatedResult
    {
        return $this->searchWithPagination(new StudentSearchCriteria, $page, $perPage);
    }
}
