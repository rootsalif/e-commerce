<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        // Supprimer les images associées à l'article lors de sa suppression
        foreach ($article->images as $image) {
            // Supprimer physiquement le fichier image
           
            Storage::delete($image->url); // Assurez-vous d'adapter cela à votre stockage et à la structure de vos images
            // Supprimer l'entrée de l'image de la base de données si nécessaire
            $image->delete(); // Supprimer l'entrée de l'image de la base de données si vous avez une table séparée pour les images
    }
}

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
