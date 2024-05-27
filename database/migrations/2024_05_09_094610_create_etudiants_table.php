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
        // Vérifie si la table 'etudiants' existe avant de la créer
        if (!Schema::hasTable('etudiants')) {
            Schema::create('etudiants', function (Blueprint $table) {
                $table->id();
                $table->string('image'); 
                $table->integer('nni');
                $table->string('nomprenom');
                $table->string('nationalite');
                $table->string('diplome')->nullable();
                $table->string('genre');
                $table->string('lieunaissance');
                $table->string('adress');
                $table->integer('age');
                $table->string('email', 191)->unique()->nullable();
                $table->integer('phone');
                $table->integer('wtsp')->nullable();
                $table->foreignId('id_country')->constrained('countries');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
?>