<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías con sus subcategorías y productos
        $categorias = Categoria::with('subcategorias.productos')->get();

        // Pasar los datos a la vista
        return view('pages.home', compact('categorias'));
    }
}


