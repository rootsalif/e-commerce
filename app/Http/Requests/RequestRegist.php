<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Http\FormRequest;

class RequestRegist extends FormRequest
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
    //    dd(session()->get('radio'));
        if(session()->get('radio')==='artisan'){
          
            return [
                'email' => 'required|email', 
                'nom_usr'=> 'required|min:3', 
                'nom'=> 'required|min:3', 
                'passwd'=> 'required|min:8', 
                'passwd_conf'=> 'required|min:8|same:passwd', 
                'profession'=> 'required|min:3', 
                'telephone'=> 'required|min:8|numeric', 
                'date_naiss'=> 'required', 
                'genre'=> 'required', 
                'ville'=> 'required|min:3', 
                'pays'=> 'required|min:3', 
                
                'type_pay'=> 'required', 
                'num_carte'=> 'required', 
                'date_exp'=> 'required', 
            ];

        }
        else if(session()->get('radio')==='client'){
         
            return [
                'email' => 'required|email', 
                'nom_usr'=> 'required|min:3', 
                'nom'=> 'required|min:3', 
                'passwd'=> 'required|min:8', 
                'passwd_conf'=> 'required|min:8|same:passwd', 
                
                'telephone'=> 'required|min:8|numeric', 
                'date_naiss'=> 'required', 
                'genre'=> 'required', 
                'ville'=> 'required|min:3', 
                'pays'=> 'required|min:3', 
                
            ];


        }
        
            return [
        
            'email' => 'required|email', 
            'nom_usr'=> 'required|min:3', 
            'nom'=> 'required|min:3', 
            'passwd'=> 'required|min:8', 
            'passwd_conf'=> 'required|min:8|same:passwd', 
            'profession'=> 'required|min:3', 
            'telephone'=> 'required|min:8|numeric', 
            'date_naiss'=> 'required', 
            'genre'=> 'required', 
            'ville'=> 'required|min:3', 
            'pays'=> 'required|min:3', 
            
            'type_pay'=> 'required', 
            'num_carte'=> 'required', 
            'date_exp'=> 'required', 
        ];
    
        
    }

    public function messages()
    {
        return [
            'radio.required'=>'Confirmez vos informations',
            'email.required'=>'Email est requis',
            'email.email'=>'Email est invalide',            
            // 'email.exists'=>'Email n\'exists pas dans la base',
            'nom_usr.required'=> 'Nom d\'utilisateur est requis', 
            'nom_usr.min'=> 'Nom minumum est 3', 
            'nom.required'=> 'Nom d\'utilisateur est requis', 
            'nom.min'=> 'Nom minumum est 3', 
            'passwd.required'=>'Le mot de passe est requis',
            'passwd.min'=>'Le minumum est 8 caractères',
            'passwd.max'=>'Le maximum est 40 caractères',
            'passwd_conf.same'=>'mot de passe sont différents',
            'passwd_conf.required'=>'Le mot de passe est requis',
            'passwd_conf.min'=>'Le minumum est 8 caractères',
            'telephone.required'=> 'Numero de phone est requis', 
            'telephone.numeric'=> 'Numero de phone est numerique',
            'telephone.min'=> 'Numero minumum est 8',
            'date_naiss.required'=> 'Date est requis', 
            'genre.required'=> 'Genre est requis', 
            'ville.required'=> 'Nom de ville est requis', 
            'pays.required'=> 'Nom du pays est requis', 
            'type_pay.required'=> 'Choix de methode est requis', 
            'num_carte.required'=> 'Numero de carte est requis', 
            'date_exp.required'=> 'date d\'expiration est requis',              
            
        ];
    }
}
