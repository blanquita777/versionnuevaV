<?php

namespace App\Http\Controllers;

use App\Models\CarritoItem;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    // Mostrar el carrito
    public function index()
    {
        $carritoItems = CarritoItem::with('producto')
            ->where('usuario_id', Auth::id())  // Filtrar por usuario
            ->get();

        return view('pages.carrito', compact('carritoItems'));
    }

    // Agregar un producto al carrito
    public function agregar(Request $request, $productoId)
    {
        $producto = Producto::find($productoId);
        if ($producto) {
            $carritoItem = CarritoItem::where('producto_id', $productoId)
                ->where('usuario_id', Auth::id())
                ->first();

            if ($carritoItem) {
                $carritoItem->cantidad += 1;
            } else {
                $carritoItem = CarritoItem::create([
                    'producto_id' => $productoId,
                    'cantidad' => 1,
                    'usuario_id' => Auth::id()
                ]);
            }
            $carritoItem->save();
        }

        // Redirigir o regresar con mensaje
        return redirect()->route('carrito.index');
    }

    // Eliminar un producto del carrito
    public function eliminar($productoId)
    {
        CarritoItem::where('producto_id', $productoId)
            ->where('usuario_id', Auth::id())
            ->delete();

        return redirect()->route('carrito.index');
    }

    // Vaciar el carrito
    public function vaciar()
    {
        CarritoItem::where('usuario_id', Auth::id())->delete();
        return redirect()->route('carrito.index');
    }
}
