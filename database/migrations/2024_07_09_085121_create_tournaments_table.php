<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('В ожидании');
            $table->foreignId('creatorID')->constrained('users');
            $table->string('name');
            $table->integer('budget');
            $table->dateTime('date');
            $table->integer('iterationDuration');
            $table->integer('iteration');
            $table->integer('participant');
            $table->integer('timer');
            $table->string('password');
            $table->integer('league');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tournament');
    }
};
