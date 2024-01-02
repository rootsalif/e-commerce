<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestArticle extends FormRequest
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
      
        if(request()->is('*/articles')){
            return [
                'nom_article'=>'required',
                'prix_unitaire_article'=>'required|integer',
                'qte_article'=>'required|integer',
                'remise_article'=>'required|integer',
                // 'tva_article'=>'required|min:5|integer',
                'etat_id'=>'required',
                'famille_id'=>'required',
                'categorie_id'=>'required',
                'modele_id'=>'required',
                'marque_id'=>'required',
                'desc_article'=>'required',
                'couleur_id'=>'required',
                'images'=>'required',            
            ];
        }else if(request()->is('*/images')){
            return [
                'article_id'=>'required',
                'couleur_id'=>'required'
            ];
            
        }
        
    }

    public function messages()
    {
        return [
            'nom_article.required'=>'Nom d\'article est requis',
            'prix_unitaire_article.required'=>'Prix unitaite est requis',
            'prix_unitaire_article.integer'=>'Uniquement des nombre naturels',
            'qte_article.required'=>'Quantité est requis',
            'qte_article.integer'=>'Uniquement des nombre naturels',
            'remise_article.required'=>'remise d\'article est requis',
            'remise_article.integer'=>'Uniquement des nombre naturels',
            // 'tva_article.required'=>'le tva est requis',
            'etat_id.required'=>'Sélectionner l\'état d\'article',
            'famille_id.required'=>'Sélectionner le famille d\'article',
            'categorie_id.required'=>'Sélectionner le categorie d\'article',
            'modele_id.required'=>'Sélectionner le modele d\'article',
            'marque_id.required'=>'Sélectionner le marque d\'article',
            'desc_article.required'=>'Description d\'article est requis',
            'couleur_id.required'=>'Sélectionner le couleur d\'article',
            'images.required'=>'Sélectionner l\'images d\'article',              
            'article_id.required'=>'Selection d\'article est requis',
            'couleur_id.required'=>'Selection couleur est requis',
        ];
    }
}
