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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('valor_total', 10, 2);
            $table->string('forma_pagamento');
            $table->string('rua_entrega');
            $table->string('numero_entrega');
            $table->string('bairro_entrega');
            $table->string('complemento_entrega')->nullable();
            $table->string('cep_entrega');
            $table->string('cidade_entrega');
            $table->string('estado_entrega');
            $table->string('telefone_contato');
            $table->string('nome_recebedor');
            $table->string('comprovante')->nullable();
            $table->string('rastreio')->nullable();            
            $table->string('observacoes')->nullable();            
            $table->enum('status', ['RE', 'CO', 'SE', 'EN', 'FI', 'CA', 'ES', 'DE'])->default('RE');
            $table->timestamp('data_recebido')->nullable();
            $table->timestamp('data_confirmado')->nullable();
            $table->timestamp('data_separado')->nullable();
            $table->timestamp('data_enviado')->nullable();        
            $table->timestamp('data_finalizado')->nullable();
            $table->timestamp('data_cancelado')->nullable();
            $table->timestamp('data_estornado')->nullable();
            $table->timestamp('data_devolvido')->nullable();
            $table->timestamp('data_recebido_estorno')->nullable();
            $table->timestamp('data_recebido_devolucao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
