<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria; // Modelo Subcategoria
use App\Models\Producto; // Modelo Producto

class SubcategoriaController extends Controller
{
    public function productos($categoria_id, $subcategoria_id)
{
    // Obtener la subcategoría seleccionada y sus productos asociados
    $subcategoria = Subcategoria::with('productos')->findOrFail($subcategoria_id);
    $productos = Producto::where('subcategoria_id', $subcategoria->id)->get();

    // Pasar la subcategoría y los productos a la vista
    return view('pages.subcategoria.productos', compact('subcategoria', 'productos'));
}

}

