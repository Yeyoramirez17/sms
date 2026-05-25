<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property string $id (UUID)
 * @property string $document_type
 * @property string $document_number
 * @property Carbon $birth_date
 * @property string $gender
 * @property string $blood_type
 * @property string $eps_name
 * @property string $eps_code
 * @property string $address
 * @property string $phone
 * @property string $student_code
 * @property string|null $photo_path
 * @property string|null $attendant_name
 * @property string|null $attendant_relationship
 * @property string|null $attendant_phone
 * @property string|null $attendant_email
 * @property Carbon|null $enrollment_date
 */
#[Table(
    name: 'students',
    keyType: 'string',
    incrementing: false,
)]
#[Fillable(
    'id',
    'document_type',
    'document_number',
    'birth_date',
    'gender',
    'blood_type',
    'eps_name',
    'eps_code',
    'address',
    'phone',
    'student_code',
    'photo_path',
    'attendant_name',
    'attendant_relationship',
    'attendant_phone',
    'attendant_email',
    'enrollment_date'
)]
class Student extends Model
{
    /** @use StudentFactory<Student> */
    use HasFactory;

    use SoftDeletes;

    public function casts(): array
    {
        return [
            'birth_date' => 'date',
            'enrollment_date' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
