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
        // Schema::table('comments', function (Blueprint $table) {
        //     $table->foreignId('pieceMusical_id')->constrained('piece_musicals')->onDelete('cascade')->change();
        //     $table->foreignId('client_id')->constrained('users')->onDelete('cascade')->change();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
