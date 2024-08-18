<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco',
        'subtotal'
    ];

    protected $table = 'itens_pedido';

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produtos::class);
    }

}
