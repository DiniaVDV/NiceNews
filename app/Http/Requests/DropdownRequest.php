<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DropdownRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'alias' => 'required',
            'position' => 'required|integer',
        ];
    }

    /**
     * Получить сообщения об ошибках для определённых правил проверки.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'  => 'Необходимо написать заголовок.',
            'alias.required' => 'Необходимо указать псевдоним.',
            'position.required' => 'Введите число в поле позиция в блоке.',
            'position.integer' => 'Введите число в поле позиция в блоке.',
        ];
    }
}
