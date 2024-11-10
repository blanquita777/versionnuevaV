@extends('layouts.app')

@section('content')
<div class="container">
    <h1>VER Y VERSE BIEN</h1>

    <div class="slider">
        <!-- Imagen principal -->
        <div class="main-image">
            <img src="/imagenes/images2.jpg" alt="Imagen Principal" id="currentImage">
        </div>

        <!-- Miniaturas -->
        <div class="thumbnails">
            <img src="/imagenes/images2.jpg" alt="Foto 1" class="thumbnail" onclick="changeImage('/imagenes/images2.jpg')">
            <img src="/imagenes/images3.jpg" alt="Foto 2" class="thumbnail" onclick="changeImage('/imagenes/images3.jpg')">
            <img src="/imagenes/images4.jpg" alt="Foto 3" class="thumbnail" onclick="changeImage('/imagenes/images4.jpg')">
            <img src="/imagenes/images5.jpg" alt="Foto 4" class="thumbnail" onclick="changeImage('/imagenes/images5.jpg')">
            <img src="/imagenes/images6.jpg" alt="Foto 5" class="thumbnail" onclick="changeImage('/imagenes/images6.jpg')">
        </div>

        <!-- Controles de navegación -->
        <button class="prev" onclick="prevImage()">&#10094;</button>
        <button class="next" onclick="nextImage()">&#10095;</button>
    </div>
    
    <!-- Sección de Categorías y Productos -->
    @if($categorias->isNotEmpty())
        <div class="categorias mt-5">
            @foreach ($categorias as $categoria)
                <div class="categoria mb-5">
                    <!-- Nombre de la categoría en mayúsculas -->
                    <h2>{{ strtoupper($categoria->nombre) }}</h2>

                    <!-- Subcategorías y un producto de cada subcategoría -->
                    <div class="subcategorias mt-4">
                        @foreach ($categoria->subcategorias as $subcategoria)
                            <div class="subcategoria mb-3">
                                <!-- Nombre de la subcategoría -->
                                <h3>{{ $subcategoria->nombre }}</h3>

                                <!-- Mostrar un producto de la subcategoría -->
                                <div class="productos">
                                    @if (isset($productosPorSubcategoria[$categoria->id][$subcategoria->id]))
                                        @php
                                            $productoSubcategoria = $productosPorSubcategoria[$categoria->id][$subcategoria->id];
                                        @endphp
                                        <div class="producto">
                                            <img src="{{ asset('images/productos/' . $productoSubcategoria->imagen) }}" alt="{{ $productoSubcategoria->nombre }}" class="img-fluid">
                                            <p>{{ $productoSubcategoria->nombre }}</p>
                                            <p>{{ $productoSubcategoria->precio }} USD</p>
                                            <form action="{{ route('carrito.agregar', $productoSubcategoria->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                                            </form>
                                        </div>
                                    @else
                                        <p>No hay productos disponibles en esta subcategoría.</p>
                                    @endif
                                </div>

                                <!-- Botón para explorar más productos de esta subcategoría -->
                                <a href="{{ route('subcategoria.productos', ['categoria_id' => $categoria->id, 'subcategoria_id' => $subcategoria->id]) }}" class="btn btn-secondary mt-2">Explorar más</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Si no hay categorías -->
        <p>No hay categorías disponibles.</p>
    @endif



    <!-- Sección de Testimonios -->
    <div class="testimonios-section mt-5">
        <h2>Testimonios de Nuestros Clientes</h2>
        <div class="testimonios-section">
            <h2>Testimonios Destacados</h2>
            <div class="testimonios-grid">
                @foreach($testimonios as $testimonio)
                    <div class="testimonio">
                        <p><strong>{{ $testimonio->email }}</strong></p>
                        <p>{{ $testimonio->contenido }}</p>
                        <p>
                            @for($i = 0; $i < $testimonio->rating; $i++)
                                <span class="star">&#9733;</span> <!-- Estrella -->
                            @endfor
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <a href="{{ route('testimonios.index') }}" class="btn btn-primary">Deja tu Testimonio</a>
    </div>
</div>
@endsection
