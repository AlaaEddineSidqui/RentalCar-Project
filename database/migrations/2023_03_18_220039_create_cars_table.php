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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('marque');
            $table->float('prix_jour');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
            $table->primary('matricule');
            $table->foreign('code')
                   ->on('clients')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
