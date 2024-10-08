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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_interno')->unique();
            $table->string('codigo_barras')->unique();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('slug')->nullable();
            $table->decimal('valor_unitario', 10, 2);
            $table->foreignId('categoria_id')->constrained('categorias')->nullable();
            $table->string('imagem')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
