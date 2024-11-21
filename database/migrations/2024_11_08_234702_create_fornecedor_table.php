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
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFornecedor');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('telefone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedor');
    }
};
