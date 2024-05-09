<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class TestForm extends FormRequest
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
            'utm' => ['required', 'max:5'],
        ];
    }

    public function messages()
    {
        return [
            'utm.max' => ':attribute Больше 5 нельзя.',
            'utm.required' => 'Нужно заполнить.',
        ];
    }


    public function attributes()
    {
        return [
            'utm' => 'МЕТКА',
        ];
    }
}
