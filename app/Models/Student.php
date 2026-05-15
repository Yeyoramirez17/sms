<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property string $id
 * @property string $document_type
 * @property string $document_number
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birth_date
 * @property string $gender
 * @property string $blood_type
 * @property string $eps_name
 * @property string $eps_code
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $student_code
 * @property string|null $photo_path
 * @property string|null $attendant_name
 * @property string|null $attendant_relationship
 * @property string|null $attendant_phone
 * @property string|null $attendant_email
 */
#[Table(
    name: 'students',
    keyType: 'string',
    incrementing: false
)]
#[Fillable(
    'document_type',
    'document_number',
    'first_name',
    'last_name',
    'birth_date',
    'gender',
    'blood_type',
    'eps_name',
    'eps_code',
    'address',
    'phone',
    'email',
    'student_code',
    'photo_path',
    'attendant_name',
    'attendant_relationship',
    'attendant_phone',
    'attendant_email',
)]
class Student extends Model
{
    use SoftDeletes;

    public function casts(): array
    {
        return [
            'birth_date' => 'date',
        ];
    }
}
