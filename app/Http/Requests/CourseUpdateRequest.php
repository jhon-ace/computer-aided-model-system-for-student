<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
            return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_code' => ['required', 'string', 'max:255'],
            'course_name' => ['required', 'string', 'max:255'],
            'course_description' => ['required', 'string', 'max:255'],
            'course_unit' => ['required', 'numeric', 'regex:/^\d{1,6}(\.\d{1,2})?$/'],
            'course_semester' => ['required', 'string', 'max:255'],
            'program_id' => ['sometimes', 'required', 'exists:programs,id'],
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'department_id.exists' => 'The selected department is invalid.',
            'course_unit.numeric' => 'The course unit must be a number.',
            'course_unit.regex' => 'The course unit must be a decimal value with up to 8 digits in total and 2 decimal places.',
        ];
    }
}
