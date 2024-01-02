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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom_usr_admin')->nullable();
            $table->string('nom_admin')->unique()->nullable();
            $table->string('email_admin')->unique()->nullable();
            $table->string('passwd_admin')->nullable();
            $table->string('telephone_admin')->nullable();
            $table->string('image_admin')->nullable();
            $table->enum('etat_admin',['Administrateur','Active'])->default('Administrateur');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
