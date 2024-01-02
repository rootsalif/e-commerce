<?php

namespace App\Models;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'montant_comd',
        'remise_comd',
        'etat_comd',
        'date_comd',
    ];


    //une commande peut avoir plusieurs Article
    public function Articles():BelongsToMany
    {
        return $this->belongsToMany(Article::class)->withPivot('prix_panier', 'qte_panier');
        // ->withPivot('prix_panier', 'qte_panier')
    }
     //un article peut avoir plusieurs images
     public function livraisons():HasMany
     {
         return $this->hasMany(Livraison::class);
     }
     public function scoptsCommander(Builder $builder):Builder
     {
        return $builder->where('etat_comd', true);
     }
}
