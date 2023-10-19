<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do Produto
            $table->text('descricao')->nullable(); // Descrição do Produto (pode ser nula)
            $table->decimal('preco', 8, 2); // Preço do Produto (até 8 dígitos com 2 casas decimais)
            $table->integer('quantidade_estoque'); // Quantidade em Estoque
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

