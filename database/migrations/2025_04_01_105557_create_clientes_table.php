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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable(false);
            $table->string('endereco', 255)->nullable(false);
            $table->string('telefone', 13)->nullable(false);
            $table->string('cpf', 20)->nullable(false)->unique(true);
            $table->string('email', 255)->nullable(false);
            $table->string('senha', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
