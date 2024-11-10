<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Producto;
use App\Models\Testimonio; // Asegúrate de tener el modelo de Testimonio

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías con sus subcategorías y productos, limitando los productos por subcategoría
        $categorias = Categoria::with(['subcategorias' => function($query) {
            $query->with(['productos' => function($query) {
                $query->latest()->take(1); // Traer solo un producto por subcategoría
            }]);
        }])->get();

        // Crear un arreglo para almacenar los productos de cada categoría
        $productosPorCategoria = [];
        foreach ($categorias as $categoria) {
            // Obtener los 4 productos más recientes de cada categoría, pero solo de sus subcategorías
            $productosPorCategoria[$categoria->id] = $categoria->productos()->latest()->take(4)->get();
        }

        // Crear un arreglo para almacenar un producto por cada subcategoría
        $productosPorSubcategoria = [];
        foreach ($categorias as $categoria) {
            foreach ($categoria->subcategorias as $subcategoria) {
                // Obtener el producto más reciente de cada subcategoría
                $productosPorSubcategoria[$categoria->id][$subcategoria->id] = $subcategoria->productos()->latest()->first();
            }
        }

        $testimonios = Testimonio::whereIn('rating', [4, 5])->get();

        return view('pages.home', compact('testimonios'));
    }
}
