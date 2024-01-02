<?php

namespace App\Models;
use App\Models\Sous_categorie;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'artisan_id',
        'nom_categorie',
        'desc_categorie',
    ];
    public function subcategories():HasMany
    {
        return $this->hasMany(Sous_categorie::class);
    }
   
    public function articles():HasMany
    {
        return $this->hasMany(Article::class);
    }
     //un article peut avoir plusieurs images
    //  public function images():HasManyThrough
    //  {
    //      return $this->hasManyThrough(Image::class, Article::class);
    //  }
    
}
