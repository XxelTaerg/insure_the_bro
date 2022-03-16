<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:insurance_companies,email',
            'password' => 'required'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'password.required' => 'Заполните поле пароль',
            'email.required' => 'Заполните поле email',
            'email.email' => 'Введите email корректно',
            'email.exists' => 'Данный email не зарегистрирован',
        ];
    }
}
