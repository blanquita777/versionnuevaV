<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\CarritoItem;

class CarritoItemSeeder extends Seeder
{
    public function run()
{
    $producto = Producto::where('nombre', 'Lentes Sol Elegantes')->first();
    CarritoItem::create([
        'producto_id' => $producto->id,
        'cantidad' => 2,
    ]);

    $producto = Producto::where('nombre', 'Lentes Sol Sport')->first();
    CarritoItem::create([
        'producto_id' => $producto->id,
        'cantidad' => 1,
    ]);
}
}
