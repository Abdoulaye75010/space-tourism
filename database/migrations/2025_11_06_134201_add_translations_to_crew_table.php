<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ajout des colonnes de traduction pour la table crew
     */
    public function up(): void
    {
        Schema::table('crew', function (Blueprint $table) {
            $table->string('name_fr')->nullable();
            $table->string('name_en')->nullable();
            $table->string('role_fr')->nullable();
            $table->string('role_en')->nullable();
            $table->text('bio_fr')->nullable();
            $table->text('bio_en')->nullable();
        });
    }

    /**
     * Suppression des colonnes si rollback
     */
    public function down(): void
    {
        Schema::table('crew', function (Blueprint $table) {
            $table->dropColumn([
                'name_fr', 'name_en',
                'role_fr', 'role_en',
                'bio_fr', 'bio_en'
            ]);
        });
    }
};
