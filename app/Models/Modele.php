<?php

namespace App\Models;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modele extends Model
{
    use HasFactory;
    protected $fillable = [
        'artisan_id',
        'nom_modele',
    ];

    public function articles():HasMany
    {
        return $this->hasMany(Article::class);
    }
}
