<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('crews', function (Blueprint $table) {
    $table->id();

    // Nom
    $table->string('name')->nullable();
    $table->string('name_fr')->nullable();
    $table->string('name_en')->nullable();

    // Rôle
    $table->string('role')->nullable();
    $table->string('role_fr')->nullable();
    $table->string('role_en')->nullable();

    // Bio
    $table->text('bio')->nullable();
    $table->text('bio_fr')->nullable();
    $table->text('bio_en')->nullable();

    // Image
    $table->string('image')->nullable();

    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('crews');
    }
};
