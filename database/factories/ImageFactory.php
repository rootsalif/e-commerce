<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
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
            'couleur_id'=> fake()->randomDigitNotNull(),
            'nom_image'=> fake()->word(),
            'path' => fake()->image('public/storage/images/',850,480, null, false)
            
        ];
    }
}
