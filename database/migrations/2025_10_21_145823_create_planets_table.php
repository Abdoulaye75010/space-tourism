<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();

            // Nom principal (pour l’admin)
            $table->string('name')->nullable();

            // Nom multilingue
            $table->string('name_fr')->nullable();
            $table->string('name_en')->nullable();

            // Description multilingue
            $table->text('description')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();

            // Distance & durée
            $table->string('distance')->nullable();
            $table->string('duration')->nullable();

            // Image
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};