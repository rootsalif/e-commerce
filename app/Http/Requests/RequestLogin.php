<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestLogin extends FormRequest
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
        if(isset(request()->type)){
            session()->flash('type', 'Êtes vous sûr de crée un compte '.request()->type." ? Alors Bienvenue!");
            return [
                // 'type'=>'required',
            ];
        }else{
            return [
                'artisan'=>'required',
            ];
        }
        
    }
    public function messages()
    {
        return [
            'artisan.required'=>'Le choix de compte est requis',
        ];
        
    }
}
