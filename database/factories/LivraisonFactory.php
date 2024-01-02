<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livraison>
 */
class LivraisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commande_id'=> fake()->randomDigitNotNull(),
            'date_livraison' => fake()->date(), 
            'adresse_livraison'=>fake()->address(),                   
            'etat_artisan'=> fake()->randomElement(['Livrer','pas Livrer', 'en Atente']),            
        ];
    }
}
