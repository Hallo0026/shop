<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;
use Illuminate\Support\Str;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = ['Eletrônicos', 'Livros', 'Roupas', 'Casa e Cozinha', 'Informática', 'Ferramentas', 'Esportes', 'Brinquedos', 'Games', 'Móveis', 'Decoração', 'Beleza', 'Papelaria', 'Alimentos', 'Bebidas', 'Pet Shop', 'Automotivo', 'Materiais Escolares', 'Outros'];

        foreach ($categorias as $categoria) {
            Categorias::create(['nome' => $categoria, 'slug' => Str::slug($categoria)]);
        }
    }
}
