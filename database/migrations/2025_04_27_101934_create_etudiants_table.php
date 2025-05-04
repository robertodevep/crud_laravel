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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->String("nom");
            $table->String("prenom");
            $table->String("sexe");
            $table->String("filiere");
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
