<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->string('resumer', '500');
            $table->integer('duree');   //tout en minute convertir avec modulo 60.
            $table->year('annee');

            $table->foreignId('realisateur')->constrained('personnes');
            $table->foreignId('producteur')->constrained('personnes');


            $table->string('pochetteURL',1000);
            $table->double('rating');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
