<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_article')->nullable();
            $table->integer('qte_article');
            $table->double('tva_article')->nullable();
            $table->double('remise_article')->nullable();
            $table->double('prix_unitaire_article');
            $table->text('desc_article')->nullable();           
            
            $table->unsignedBigInteger('artisan_id');
            $table->foreign('artisan_id')->references('id')->on('artisans')->onDelete('cascade');
            $table->unsignedBigInteger('famille_id');
            $table->foreign('famille_id')->references('id')->on('familles')->onDelete('cascade');
            $table->unsignedBigInteger('marque_id');
            $table->foreign('marque_id')->references('id')->on('marques')->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('modele_id');
            $table->foreign('modele_id')->references('id')->on('modeles')->onDelete('cascade');
            $table->foreign('etat_id')->references('id')->on('etats')->onDelete('cascade');
            $table->unsignedBigInteger('etat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
