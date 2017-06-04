<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RosingerRequest extends FormRequest
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
            'email' => 'required|email',
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
            'name.required'  => 'Необходимо написать имя.',
            'email.required' => 'Необходимо указать e-mail.',
            'email.email' => 'Необходимо указать e-mail в правильной форме (example@ex.com).',
        ];
    }
}
