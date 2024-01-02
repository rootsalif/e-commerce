<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'couleur_id',
        'nom_image',
        'path',
    ];

    //une image peut avoir plusieurs couleurs
    public function couleur():BelongsTo
    {
        return $this->belongsTo(Couleur::class);
    }

    //une image appartient à un article
    public function article():BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
    // public function categorie(): HasOneThrough
    // {
    //     return $this->hasOneThrough(Categorie::class, Image::class);
    // }
}
