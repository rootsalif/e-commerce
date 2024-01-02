<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>'required|min:3',
            'nom_usr'=>'required|min:3',
            'email'=>'required|email',
            'passwd'=>'required|min:8|max:20',
            'telephone'=>'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'Votres nom est requis',
            'nom.required'=>'Votres nom d\'utilisateur est requis',
            'email.email'=>'Email n\'existe pas',
            'email.required'=>'Email est requis',
            'passwd.required'=>'Le mot de passe est requis',
            'passwd.required'=>'Le numero de telephone est requis',
        ];
    }
}
