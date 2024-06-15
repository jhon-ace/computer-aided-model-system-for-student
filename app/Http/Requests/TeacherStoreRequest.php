<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            'teacher_photo' => 'image|max:2048', // Example rule for faculty photo (image file, max 2MB)
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'password' => 'required|string|min:8',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'teacher_photo.image' => 'The photo must be an image file.',
            'teacher_photo.max' => 'The photo may not be greater than 2MB.',
            'name.required' => 'The faculty name is required.',
            'name.max' => 'The faculty name may not be greater than :max characters.',
            'email.required' => 'The faculty email is required.',
            'email.email' => 'The faculty email must be a valid email address.',
            'email.unique' => 'The faculty email has already been taken.',
            'password.required' => 'The faculty password is required.',
            'password.min' => 'The faculty password must be at least :min characters.',
            'department_id.required' => 'Please select a department for the faculty.',
            'department_id.exists' => 'The selected department is invalid.',
            'status.required' => 'The faculty status is required.',
        ];
    }

}
