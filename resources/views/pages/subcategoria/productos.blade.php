@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ strtoupper($subcategoria->nombre) }} - Productos</h2>

        <div class="productos row">
            @foreach($productos as $producto) <!-- Cambié a $productos en lugar de $subcategoria->productos -->
                <div class="producto col-md-4 mb-4"> <!-- Ajusté la columna para mostrar 3 productos por fila -->
                    <div class="card">
                        <!-- Verifica si el producto tiene una imagen, si no, usa una imagen predeterminada -->
                        <img src="{{ asset('images/productos/' . $producto->imagen ?? 'default-image.jpg') }}" 
                             alt="{{ $producto->nombre }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->marca }}</p>
                            <p class="card-text">Precio: ${{ number_format($producto->precio, 2) }} USD</p>
                            <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
