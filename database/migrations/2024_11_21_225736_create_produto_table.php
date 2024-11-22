
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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string("nomeProduto", 100);
            $table->string("descricaoProduto", 255);
            $table->unsignedBigInteger("idCategoria");
            $table->unsignedBigInteger("idFornecedor");
            $table->foreign("idCategoria")->references("id")->on("categoria");
            $table->foreign("idFornecedor")->references("id")->on("fornecedor");
            $table->decimal("precoProduto", 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
