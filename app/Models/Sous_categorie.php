<?php

namespace App\Models;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Sous_categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_id',
        'nom_s_categorie',               
    ];
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

     //un sous categorie peut avoir plusieurs articles
     public function articles():HasManyThrough
     {
         return $this->hasManyThrough(Article::class, Categorie::class);
     }
}
