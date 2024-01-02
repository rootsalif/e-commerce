<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Couleur;
use App\Models\Famille;
use App\Models\Image;
use App\Models\Livraison;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\pivot_table_article_commande;
use App\Models\Sous_categorie;
use Database\Factories\Article_CommandeFactory;
use Database\Factories\CouleurFactory;
use Illuminate\Console\Command;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $this->call([
            AdminSeeder::class,
        ]);

        // Famille::factory(15)->create();
        // Marque::factory(20)->create();
        // Modele::factory(30)->create();
        // Categorie::factory(25)->create();
        // Sous_categorie::factory(50)->create();
        // Article::factory(10)->create();
        // Couleur::factory(20)->create();
        // Image::factory(30)->create();
        // Commande::factory(10)->create();
        // Livraison::factory(10)->create();     

        
        
        
        // Article::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
