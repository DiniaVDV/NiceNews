<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertsRequest extends FormRequest
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
            'price' => 'required|numeric',
            'content' => 'required',
            'name_company' => 'required',
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
            'price.required' => 'Поле цена пустое.',
            'price.numeric' => 'Введите число в поле цена.',
            'content' => 'Поле объявление пустое.',
            'name_company' => 'Необходимо ввести название компании.',
            'position.integer' => 'Введите число в поле позиция в блоке.',
        ];
    }
}
