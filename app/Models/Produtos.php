<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_interno',
        'codigo_barras',
        'nome',
        'descricao',
        'preco',
        'quantidade_estoque',
        'categoria_id',
        'imagem',
        'ativo'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }

}
