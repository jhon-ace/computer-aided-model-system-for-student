<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepartmentUpdateRequest extends FormRequest
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
            'department_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('departments', 'department_name')->ignore($this->department->id),
            ],
            'department_description' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'department_name.unique' => 'The department name has already been registered.',
        ];
    }
}
