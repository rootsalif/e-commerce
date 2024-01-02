<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artisan>
 */
class ArtisanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_artisan' => fake()->name(),
            'profession_artisan'=>fake()->jobTitle(),
            'nom_usr_artisan'=>fake()->unique()->userName,
            'email_artisan' =>fake()->unique()->safeEmail(),
            'genre_artisan'=>fake()->randomElement(['Homme','Femme']),
            'date_naiss_artisan'=>fake()->date(),
            // 'email_vald_artisan' => fake()->unique()->safeEmail(),
            'passwd_artisan'=>Hash::make('password'),
            'telephone_artisan'=>fake()->e164PhoneNumber(),
            'adresse_artisan' => fake()->catchPhrase(),
            'image_artisan' => fake()->name(),
        ];
    }
}
