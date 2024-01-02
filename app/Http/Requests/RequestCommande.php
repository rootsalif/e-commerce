<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCommande extends FormRequest
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
            'carte_payer'=>'required',
            'type_payer'=>'required',
            'numero_payer'=>'required',
            'numero_conf_payer'=>'required|same:numero_payer',
            'phone_livraison'=>'required|min:5|integer',
            'adresse_livraison'=>'required',
            'lieu_livraison'=>'required',            
        ];
    }

    public function messages()
    {
        return [
            'carte_payer.required'=>'S\'il vouplait saisie le nom de paiement',
            'type_payer.required'=>'Selectionner le type de payment',
            'numero_payer.required'=>'mot de passe est requis',
            'numero_conf_payer.required'=>'confirmer le mot de passe',
            'numero_conf_payer.same'=>'Deux passes sont différents',
            'phone_livraison.required'=>'Numero de phone est requis pour la livraison',
            'phone_livraison.min'=>'Numero de phone minumum est 8',
            'phone_livraison.integer'=>'Numero de phone possède que des chiffres',
            'adresse_livraison.required'=>'Adresse de livraison est requis',
            'lieu_livraison.required'=>'Lieu de livraison dans les endroids public',           
            
        ];
    }
}
