<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'preview' => 'file|max:500',
            'name' => 'string|nullable|required|unique:books,name|max:150',
            'publish_year' => 'integer|nullable|required|max:9999',
            'descr' => 'string|nullable|required|max:2000',
            'author_id' => 'integer',
            'category_id' => 'integer'
        ];
    }

    public function messages() {
        return [
            'preview.max' => "Файл не должен превышать :max килобайт",

            'name.max' => "Ограничение до :max символов",
            'name.required' => "Обязательно для заполнения",
            'name.unique' => "Такая книга уже внесена",

            'publish_year.max' => "Ограничение до 4 символов",
            'publish_year.integer' => "Нужно ввести цифру",
            'publish_year.required' => "Обязательно для заполнения",

            'descr.max' => "Ограничение до :max символов",
            'descr.required' => "Обязательно для заполнения",

        ];
    }

}
