<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Subcategoria;

class SubcategoriaSeeder extends Seeder
{
    public function run()
{
    $categoria1 = Categoria::where('nombre', 'Lentes de Sol')->first();
    $categoria2 = Categoria::where('nombre', 'Lentes Oftalmológicos')->first();
    $categoria3 = Categoria::where('nombre', 'Lentes de Contacto')->first();

    $categoria1->subcategorias()->createMany([
        ['nombre' => 'Mujeres'],
        ['nombre' => 'Hombres'],
        ['nombre' => 'Unisex'],
        ['nombre' => 'Niños'],
    ]);

    $categoria2->subcategorias()->createMany([
        ['nombre' => 'Mujeres'],
        ['nombre' => 'Hombres'],
        ['nombre' => 'Unisex'],
        ['nombre' => 'Niños'],
    ]);

    $categoria3->subcategorias()->createMany([
        ['nombre' => 'Mujeres'],
        ['nombre' => 'Hombres'],
        ['nombre' => 'Unisex'],
        ['nombre' => 'Niños'],
    ]);
}
}
