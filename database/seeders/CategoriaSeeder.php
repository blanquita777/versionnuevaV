<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        // Crear categorías
        Categoria::create(['nombre' => 'Lentes de sol']);
        Categoria::create(['nombre' => 'Lentes oftalmológicos']);
        Categoria::create(['nombre' => 'Lentes de contacto']);
    }
}

