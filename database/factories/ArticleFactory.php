<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artisan_id'=> fake()->randomDigitNotNull(),
            'marque_id'=> fake()->randomDigitNotNull(),
            'modele_id'=> fake()->randomDigitNotNull(),
            'famille_id'=> fake()->randomDigitNotNull(),
            'categorie_id'=> fake()->randomDigitNotNull(),
            'nom_article' => fake()->name(),
            'qte_article' => fake()->numberBetween(0, 100),
            'tva_article' => fake()->randomNumber(6, true),
            'remise_article' => fake()->randomNumber(3, true),
            'prix_unitaire_article' => fake()->randomNumber(5, true),
            'desc_article' => fake()->sentence(),   
            'etat_article'=> fake()->randomElement(['Neuf','Second Main', 'Embalier']),
        ];
    }
}
