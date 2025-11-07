<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ajout des colonnes de traduction pour la table planets
     */
    public function up(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->string('name_fr')->nullable();
            $table->string('name_en')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    /**
     * Suppression des colonnes si rollback
     */
    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropColumn(['name_fr', 'name_en', 'description_fr', 'description_en']);
        });
    }
};
