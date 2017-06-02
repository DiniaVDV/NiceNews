<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
           'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date',
            'special_section' => 'required|integer',
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
            'title.required' => 'Необходимо написать название.',
            'body.required'  => 'Поле текст пустое.',
            'special_section.required'  => 'Необходимо указать является ли статья с ограниченым доступом(1 - да, 0 - нет.).',
            'special_section.integer'  => 'Необходимо указать является ли категория с ограниченым доступом(1 - да, 0 - нет.).',
        ];
    }
}
