<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoria;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
{
    $subcategoria_mujeres = Subcategoria::where('nombre', 'Mujeres')->first();
    $subcategoria_hombres = Subcategoria::where('nombre', 'Hombres')->first();
    $subcategoria_unisex = Subcategoria::where('nombre', 'Unisex')->first();
    $subcategoria_niños = Subcategoria::where('nombre', 'Niños')->first();

    // Agregar productos a las subcategorías
    Producto::create([
        'subcategoria_id' => $subcategoria_mujeres->id,
        'nombre' => 'Lentes Sol Elegantes',
        'marca' => 'Marca X',
        'precio' => 100.00,
        'cantidad' => 50,
        'color' => 'Negro',
        'imagen' => 'lentes_sol_1.jpg',
    ]);

    Producto::create([
        'subcategoria_id' => $subcategoria_hombres->id,
        'nombre' => 'Lentes Sol Sport',
        'marca' => 'Marca Y',
        'precio' => 120.00,
        'cantidad' => 30,
        'color' => 'Azul',
        'imagen' => 'lentes_sol_2.jpg',
    ]);

    // Agregar más productos para otras subcategorías...
}
}
