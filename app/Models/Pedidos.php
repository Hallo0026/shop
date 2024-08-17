<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'valor_total',
        'forma_pagamento',
        'rua_entrega',
        'numero_entrega',
        'bairro_entrega',
        'complemento_entrega',
        'cep_entrega',
        'cidade_entrega',
        'estado_entrega',
        'telefone_contato',
        'nome_recebedor',
        'cpf_recebedor',
        'cnpj_recebedor',
        'email_recebedor',
        'comprovante',
        'rastreio',
        'observacoes',
        'status',
        'data_recebido',
        'data_confirmado',
        'data_separado',
        'data_enviado',
        'data_finalizado',
        'data_cancelado',
        'data_estornado',
        'data_devolvido',
        'data_recebido_estorno',
        'data_recebido_devolucao',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
