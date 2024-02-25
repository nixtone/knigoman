<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'string|nullable|required|max:150',
            'descr' => 'string|nullable|required|max:500'
        ];
    }

    public function messages() {
        return [
            'name.required' => "Обязательно для заполнения",
            'name.max' => "Ограничение до :max символов",

            'descr.required' => "Обязательно для заполнения",
            'descr.max' => "Ограничение до :max символов",
        ];
    }
}
