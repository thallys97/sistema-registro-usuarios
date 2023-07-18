<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3', 'unique:users' ],
            'email' => ['required','min:3', 'unique:users' ],
            'password' => ['required','min:3', 'confirmed' ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo de nome é obrigatório',
            'email.required' => 'O campo de email é obrigatório',
            'password.required' => 'O campo de senha é obrigatório',
            'name.min' => 'O campo de nome precisa de pelo menos :min caracteres',
            'email.min' => 'O campo de email precisa de pelo menos :min caracteres',
            'password.min' => 'O campo de senha precisa de pelo menos :min caracteres',
            'name.unique' => 'nome indisponível',
            'email.unique' => 'email indisponível',
            'password.confirmed' => 'O valor do campo de confirmação de senha não é igual ao campo de senha'
        ];
    }


}
