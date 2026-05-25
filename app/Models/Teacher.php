<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    "employee_code",
    "document_type",
    "document_number",
    "date_of_birth",
    "gender",
    "email",
    "phone",
    "specialty",
    "professional_title",
    "hire_date",
    "photo_path",
])]
class Teacher extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
