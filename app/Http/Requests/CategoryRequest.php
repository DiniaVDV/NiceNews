<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required',
            'title' => 'required',
            'position' => 'required|integer',
            'special_category' => 'required|integer'
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
            'name.required' => 'Необходимо указать псевдоним.',
            'title.required'  => 'Необходимо написать название.',
            'position.required' => 'Необходимо указать позицию категории в меню(целое число).',
            'position.integer' => 'Необходимо указать позицию категории в меню(целое число).',
            'special_category.required'  => 'Необходимо указать является ли категория с ограниченым доступом(1 - да, 0 - нет.).',
            'special_category.integer'  => 'Необходимо указать является ли категория с ограниченым доступом(1 - да, 0 - нет.).',
        ];
    }
}
