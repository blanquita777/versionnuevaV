<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
// routes/web.php



//Ruta para la Página Principal 
Route::get('/', [HomeController::class, 'index']);
//Ruta para Explorar los Productos por Subcategoría
Route::get('categoria/{categoria_id}/subcategoria/{subcategoria_id}/productos', [SubcategoriaController::class, 'productos'])->name('subcategoria.productos');

// Rutas del carrito
Route::middleware('auth')->group(function () {
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/agregar/{productoId}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::post('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
});

// Rutas para nosotros
Route::get('/nosotros', [PagesController::class, 'nosotros'])->name('nosotros');
// Rutas de los testimonios
Route::get('/testimonios', [TestimonioController::class, 'index'])->name('testimonios.index');
Route::post('/testimonios', [TestimonioController::class, 'store'])->name('testimonios.store');
//ruta para garantia
Route::get('/garantias', [PagesController::class, 'showGarantias']);
//ruta para politicas de privacidad
Route::get('/politicas', [PagesController::class, 'showPoliticas']);
//ruta para preguntas freceuntes
Route::get('/preguntas', [PagesController::class, 'showPreguntas']);
//ruta para vision para carreteras
Route::get('/vision-carreteras', [PagesController::class, 'showCarreteras']);
// Rutas de metodo de pago 
Route::get('checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');
