<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Couleur extends Model
{
    use HasFactory;

    protected $fillable = [   
        'artisan_id',    
        'nom_couleur',
    ];

    //un couleur appartient à une image
    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
}
