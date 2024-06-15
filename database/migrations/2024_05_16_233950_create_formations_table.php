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
        // Supprimer la table si elle existe déjà
        if (Schema::hasTable('formations')) {
            Schema::drop('formations');
        }

        // Créer la table
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->integer('duree')->unsigned(); // Utilisation d'un entier non signé pour garantir une valeur positive
            $table->integer('prix'); // Correction ici
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};