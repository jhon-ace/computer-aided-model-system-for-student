<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreFile extends FormRequest
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
        $rules  = [
            'files.*' => 'image|max:2048',
            'content1' => 'required|string',
            'content2' => 'required|string',
        ];

        return $rules;
    }
}
