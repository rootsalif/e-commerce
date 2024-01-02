<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etat extends Model
{
    use HasFactory;
    protected $fillable = [
        'artisan_id',
        'nom_etat',
    ];

    public function articles():HasMany
    {
        return $this->hasMany(Article::class);
    }
}
