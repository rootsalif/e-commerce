<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id'=> fake()->randomDigitNotNull(),
            'date_comd' => fake()->date(),  
            'montant_comd' => fake()->randomNumber(3, true),   
        ];
    }
}
