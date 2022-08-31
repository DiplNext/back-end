<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'department_type_id' => [
              'required',
              'exists:department_types,id'
            ],
            'code' => ['required', 'string', 'max:16'],
            'title' => ['required', 'string'],
            'short_title' => ['required', 'string', 'max:16'],
            'employees_count' => ['required', 'numeric'],
            'supervisor_count' => ['required', 'numeric'],
            'user_id' => [
            'required',
            'exists:users,id'
            ],
        ];
    }
}
