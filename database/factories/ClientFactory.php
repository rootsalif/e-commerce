<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
        'nom_client' => fake()->name(),
        'nom_usr_client'=>fake()->unique()->userName,
        'email_client' => fake()->unique()->safeEmail(),
        'genre_client'=>fake()->randomElement(['Homme','Femme']),
        'date_naiss_client'=>fake()->date(),
        'passwd_client'=>Hash::make('password'),
        'telephone_client'=>fake()->e164PhoneNumber(),
        // 'email_vald_client' => fake()->name(),
        'adresse_client' => fake()->catchPhrase(),
        'image_client' => fake()->name(),
                
        ];
    }
}
