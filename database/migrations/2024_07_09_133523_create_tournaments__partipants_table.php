<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('participant_tournament', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained('participants')->onDelete('cascade');
            $table->foreignId('tournament_id')->constrained('tournament')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['participant_id', 'tournament_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('participant_tournament');
    }
};
