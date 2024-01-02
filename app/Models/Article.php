<?php

namespace App\Models;

use App\Models\Marque;
use App\Models\Artisan;
use App\Models\Modele;
use App\Models\Famille;
use App\Models\Categorie;
use App\Models\Couleur;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'artisan_id',
        'famille_id',
        'marque_id',
        'categorie_id',
        'modele_id',
        'etat_id',
        'nom_article',
        'qte_article',
        'tva_article',
        'remise_article',
        'prix_unitaire_article',
        'desc_article',
        'etat_article',
    ];

    //un article appartient à un artisan
    public function artisan(): BelongsTo
    {
       return $this->belongsTo(Artisan::class);
    }

    //un article appartient à une famille
    public function famille(): BelongsTo
    {
        return $this->belongsTo(Famille::class);
    }

    //un article appartient à un modele
    public function modele(): BelongsTo
    {
        return $this->belongsTo(Modele::class);
    }

    //un article appartient à un marque
    public function marque(): BelongsTo
    {
        return $this->belongsTo(Marque::class);
    }

    //un article appartient à un categorie
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
    //un article peut avoir plusieurs images
    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }

    //un article peut avoir plusieurs images
    public function couleurs():HasManyThrough
    {
        return $this->hasManyThrough(Couleur::class, Image::class);
    }

     //un article peut avoir plusieurs Commande

     public function commandes():BelongsToMany
     {
         return $this->belongsToMany(Commande::class)->withPivot('prix_panier', 'qte_panier');
     }

     public function subcateborie(): HasOneThrough
     {
         return $this->hasOneThrough(Categorie ::class, Sous_categorie::class);
     }

     public function scoptsRecent(Builder $builder):Builder
     {
        return $builder->where('created_at', 'desc');
     }

}
