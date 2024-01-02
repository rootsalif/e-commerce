<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Artisan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard='artisan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [        
        'nom_artisan',
        'prenom_artisan',
        'profession_artisan',
        'nom_usr_artisan',
        'email_artisan',
        'passwd_artisan',
        'genre_artisan',
        'date_naiss_artisan',
        'telephone_artisan',
        'adresse_artisan',
        'image_artisan',
        'etat_artisan',        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function articles():HasMany
    {
        return $this->hasMany(Article::class);
    }
}
