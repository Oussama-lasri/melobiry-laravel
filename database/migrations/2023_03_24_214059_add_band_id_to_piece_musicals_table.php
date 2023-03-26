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
        Schema::table('piece_musicals', function (Blueprint $table) {
            $table->unsignedBigInteger('band_id')->nullable();
            $table->foreign('band_id')->references('id')->on('bandes')->onDelete('cascade');
            // $table->foreignId('band_id')->constrained('bandes')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('piece_musicals', function (Blueprint $table) {
            //
        });
    }
};
