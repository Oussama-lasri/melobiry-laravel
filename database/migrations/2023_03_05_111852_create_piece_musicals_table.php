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
        Schema::create('piece_musicals', function (Blueprint $table) {
            $table->id();
            $table->string('titreMusic');
            $table->unsignedBigInteger('artiste_id');
            $table->string('image');
            $table->string('music');
            $table->string('writers');
            $table->longText('words');
            $table->string('langue');
            $table->double('duration');
            $table->date('release_date');
            $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_musicals');
    }
};
