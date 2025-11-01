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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCompleto', '45');
            $table->string('pes_cpf', '11')->unique();
            $table->date('dataNasc');
            $table->string('email')->unique();
            $table->string('endereco', '150')->nullable();
            $table->string('sexo', '10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};
