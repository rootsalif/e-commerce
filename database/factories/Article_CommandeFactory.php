<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Article_CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id'=> fake()->randomDigitNotNull(),
            'commande_id'=> fake()->randomDigitNotNull(),
            'qte_panier' => fake()->numberBetween(0, 100),
            'prix_panier' => fake()->randomNumber(6, true),   
        ];
    }
}
