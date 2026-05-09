<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    "employee_code",
    "document_type",
    "document_number",
    "first_name",
    "last_name",
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
    //
}
