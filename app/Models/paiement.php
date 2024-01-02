<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'commande_id',
        'type_paiement',
        'carte_paiement',
        'numero_paiement',
    ];
}
