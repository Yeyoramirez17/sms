<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Src\SMS\Students\Domain\ValueObjects\Gender;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'               => ['sometimes', 'email', 'max:255'],
            'first_name'          => ['sometimes', 'string', 'min:2', 'max:50'],
            'last_name'           => ['sometimes', 'string', 'min:2', 'max:50'],
            'role'                => ['sometimes', 'string', 'in:student,teacher,admin'],
            'status'              => ['sometimes', 'string', 'in:active,inactive,suspended'],
            'user_id'             => ['sometimes', 'string', 'max:255'],
            'document_type'       => ['sometimes', 'string', 'in:TI,CC,CE'],
            'document_number'     => ['sometimes', 'string', 'min:6', 'max:15'],
            'birth_date'          => ['sometimes', 'date', 'before:today'],
            'gender'              => ['sometimes', Rule::enum(Gender::class)],
            'address'             => ['nullable', 'string', 'max:255'],
            'phone'               => ['nullable', 'string', 'max:20'],
            'photo_path'          => ['nullable', File::image()->max(5 * 1024)], // Max 5MB
            'institutional_email' => ['nullable', 'email'],
            'student_code'        => ['nullable', 'string', 'max:20'],
            'eps_name'            => ['nullable', 'string', 'max:100'],
            'eps_code'            => ['nullable', 'string', 'max:10'],
            'blood_type'          => ['nullable', 'string', 'in:A+,A-,B+,B-,AB+,AB-,O+,O-'],
            'attendant_name'      => ['nullable', 'string', 'min:3', 'max:100'],
            'attendant_relationship' => ['nullable', 'string', 'min:3', 'max:50'],
            'attendant_phone'     => ['nullable', 'string', 'max:20'],
            'attendant_email'     => ['nullable', 'email'],
        ];
    }

    public function messages(): array
    {
        return [
            'document_type.in'  => 'The document type must be TI, CC, or CE.',
            'birth_date.before' => 'The birth date cannot be in the future.',
            'gender.enum'       => 'The gender must be male, female, or other.',
        ];
    }
}
