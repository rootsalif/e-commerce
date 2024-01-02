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
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('nom_artisan')->nullable();
            $table->string('profession_artisan')->nullable();
            $table->string('nom_usr_artisan')->unique()->nullable();
            $table->string('email_artisan')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('genre_artisan')->nullable();
            $table->date('date_naiss_artisan')->nullable();
            $table->string('passwd_artisan')->nullable();
            $table->string('telephone_artisan')->nullable();
            $table->string('adresse_artisan')->nullable();
            $table->string('image_artisan')->nullable();
            $table->enum('etat_artisan', ['En_Attente', 'revis', 'Active'])->default('En_Attente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
