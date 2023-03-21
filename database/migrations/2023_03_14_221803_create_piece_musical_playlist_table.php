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
        Schema::create('piece_musical_playlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piece_musical_id')->constrained()->onDelete('cascade');
            $table->foreignId('playlist_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_musical_playlist');
    }
};
