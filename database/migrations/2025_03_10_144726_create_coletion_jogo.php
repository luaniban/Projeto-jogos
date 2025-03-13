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
        Schema::create('coletion_jogo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coletions_id'); // Criar a coluna antes de definir a FK
            $table->unsignedBigInteger('jogos_id');     // Criar a coluna antes de definir a FK

            $table->foreign('coletions_id')->references('id')->on('coletions')->onDelete('cascade');
            $table->foreign('jogos_id')->references('id')->on('jogos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coletion_jogo');
    }
};
