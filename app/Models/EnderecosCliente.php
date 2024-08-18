<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecosCliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rua',
        'numero',
        'bairro',
        'complemento',
        'cep',
        'cidade',
        'estado',
        'telefone',
        'nome_recebedor',
        'principal'
    ];

    protected $table = 'enderecos_cliente';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
