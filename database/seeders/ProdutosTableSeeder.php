<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;
use App\Models\Produtos;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $categorias = Categorias::all();

        foreach ($categorias as $categoria) {
            for ($i = 0; $i < 10; $i++) {
                Produtos::create([
                    'codigo_interno' => $faker->numberBetween(1000, 9999999),
                    'codigo_barras' => $faker->numberBetween(1000000, 100000000000),
                    'categoria_id' => $categoria->id,
                    'nome' => $faker->words(3, true),
                    'slug' => $faker->slug,
                    'descricao' => $faker->paragraph,
                    'valor_unitario' => $faker->randomFloat(2, 10, 500),
                ]);
            }
        }
    }
}
