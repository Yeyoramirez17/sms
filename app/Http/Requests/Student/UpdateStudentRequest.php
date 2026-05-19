<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Src\SMS\Students\Domain\ValueObjects\Gender;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $studentId = $this->route('id');

        return [
            'document_type'   => ['sometimes', 'string', 'in:TI,CC,CE'],
            'document_number' => ['sometimes', 'string', 'min:6', 'max:15'],
            'first_name'      => ['sometimes', 'string', 'min:2', 'max:50'],
            'last_name'       => ['sometimes', 'string', 'min:2', 'max:50'],
            'birth_date'      => ['sometimes', 'date', 'before:today'],
            'gender'          => ['sometimes', Rule::enum(Gender::class)],
            'blood_type'      => ['nullable', 'string', 'in:A+,A-,B+,B-,AB+,AB-,O+,O-'],
            'eps_name'        => ['nullable', 'string', 'max:100'],
            'eps_code'        => ['nullable', 'string', 'max:10'],
            'address'         => ['nullable', 'string', 'max:255'],
            'phone'           => ['nullable', 'string', 'max:20'],
            'email'           => ['nullable', 'email'],
            'attendant_name'  => ['nullable', 'string', 'min:3', 'max:100'],
            'attendant_relationship' => ['nullable', 'string', 'min:3', 'max:50'],
            'attendant_phone' => ['nullable', 'string', 'max:20'],
            'attendant_email' => ['nullable', 'email'],
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