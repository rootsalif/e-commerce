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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom_client')->nullable();
            $table->string('prenom_client')->nullable();
            $table->string('nom_usr_client')->unique()->nullable();
            $table->string('email_client')->unique()->nullable();
            $table->timestamp('email_vald_client')->nullable();
            $table->string('genre_client')->nullable();
            $table->date('date_naiss_client')->nullable();
            $table->string('passwd_client')->nullable();
            $table->string('telephone_client')->nullable();
            $table->string('adresse_client')->nullable();
            $table->string('image_client')->nullable();
            $table->enum('etat_client',['En attente','Active'])->default('En attente');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
