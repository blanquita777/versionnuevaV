<head>
    <!-- Enlace a la librería de Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>
    <header>
        <!-- Logo de la tienda -->
        <div class="logo">
            <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo" />
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <form action="#" method="GET">
                <input type="text" placeholder="Buscar en toda la tienda..." name="search" />
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Opciones de usuario -->
        <div class="user-options">
            <a href="/account"><i class="fas fa-user"></i> Mi Cuenta</a>
            <a class="nav-link" href="{{ route('carrito.index') }}">
                <i class="fas fa-shopping-cart"></i> Carrito 
                <span class="badge">
                    @if(Auth::check())
                        {{ \App\Models\CarritoItem::where('usuario_id', Auth::id())->sum('cantidad') }}
                    @else
                        0
                    @endif
                </span>
            </a>
        </div>
    </header>

    <!-- Menú de navegación -->
    <nav class="main-navigation">
        <ul>
            <li><a href="#"><i class="fas fa-search"></i> EXPLORAR</a></li>
            <li><a href="/nosotros"><i class="fas fa-info-circle"></i> NOSOTROS</a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> CATALOGO</a></li>
            <li><a href="#"><i class="fas fa-gift"></i> OFERTAS Y PROMOCIONES</a></li>
            <li><a href="/testimonios"><i class="fas fa-comments"></i> TESTIMONIOS</a></li>
            <li><a href="#"><i class="fas fa-calendar-check"></i> RESERVA TU CITA</a></li>
        </ul>
    </nav>
</body>