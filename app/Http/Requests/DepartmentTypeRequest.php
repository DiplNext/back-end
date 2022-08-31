<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentTypeRequest extends FormRequest
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
        'title' => ['required', 'string'],
        'short_title' => ['required', 'string'],
        'department_level' => ['required', 'numeric'],
        'user_id' => ['required', 'exists:users,id']
        ];
    }
}
