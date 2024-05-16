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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomprenom');
            $table->string('email');
            $table->string('diplome');
            $table->integer('phone');
            $table->integer('wtsp');
            $table->unsignedBigInteger('typeymntprof_id');
            $table->foreign('typeymntprof_id')->references('id')->on('typeymntprofs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeurs');
    }
};
