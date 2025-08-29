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
        Schema::create('ligneCommande', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produits_id')->constrained();
            $table->foreignId('commandes_id')->constrained();
            $table->integer('quantite');
            $table->integer('prix_unitaire'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligneCommande');
    }
};
