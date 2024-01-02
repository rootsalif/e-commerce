<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'commande_id',
        'type_livraison',
        'adresse_livraison',
        'date_livraison',
        'etat_livraison',
    ];

    //un article appartient à un marque
    public function commande(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }

    public function scoptsLivrer(Builder $builder):Builder
     {
        return $builder->where('etat_livraison', true);
     }

}
