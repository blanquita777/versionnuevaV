@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5 text-primary">Nosotros</h1>

    <!-- Misión y Visión -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h2 class="text-primary">Misión</h2>
            <p class="text-muted">Nuestra misión es mejorar la calidad de vida de nuestros clientes proporcionando servicios ópticos de alta calidad, adaptados a sus necesidades individuales.</p>
        </div>
        <div class="col-md-6">
            <h2 class="text-primary">Visión</h2>
            <p class="text-muted">Aspiramos a ser líderes en el sector óptico en Perú, ofreciendo soluciones avanzadas y un servicio excepcional para todos nuestros clientes.</p>
        </div>
    </div>

    <!-- Años de experiencia -->
    <div class="row my-5">
        <div class="col-12 text-center">
            <h2 class="text-primary">10 Años de Experiencia</h2>
            <p class="text-muted">Durante una década, hemos brindado un servicio de calidad a nuestros clientes, comprometidos con su bienestar visual y su satisfacción. Cada año nos ha permitido perfeccionar nuestras técnicas y ampliar nuestros conocimientos para ofrecer siempre lo mejor.</p>
        </div>
    </div>

    <!-- Tarjetas de imágenes -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded">
                <img src="{{ asset('imagenes/doctor.jpg') }}" alt="Imagen 1" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Imagen 1</h5>
                    <p class="card-text">Descripción breve de la imagen 1.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded">
                <img src="{{ asset('imagenes/doctor2.jpg') }}" alt="Imagen 2" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Imagen 2</h5>
                    <p class="card-text">Descripción breve de la imagen 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded">
                <img src="{{ asset('imagenes/doctor1.jpg') }}" alt="Imagen 3" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Imagen 3</h5>
                    <p class="card-text">Descripción breve de la imagen 3.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Equipo -->
    <div class="row my-5">
        <h2 class="text-center text-primary">Equipo Profesional</h2>
        <p class="text-center text-muted">Conoce a los expertos que cuidan de tu visión.</p>
        <div class="col-md-4 text-center animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
            <img src="{{ asset('imagenes/especialista1.jpg') }}" alt="Especialista 1" class="rounded-circle mb-3">
            <h5>Dr. Juan Pérez</h5>
            <p>Especialista en Diagnóstico Ocular</p>
        </div>
        <div class="col-md-4 text-center animate__animated animate__fadeIn" style="animation-delay: 0.4s;">
            <img src="{{ asset('imagenes/especialista2.jpg') }}" alt="Especialista 2" class="rounded-circle mb-3">
            <h5>Dra. María López</h5>
            <p>Optometrista</p>
        </div>
        <div class="col-md-4 text-center animate__animated animate__fadeIn" style="animation-delay: 0.5s;">
            <img src="{{ asset('imagenes/especialista3.jpg') }}" alt="Especialista 3" class="rounded-circle mb-3">
            <h5>Dr. Carlos Gómez</h5>
            <p>Especialista en Lentes de Contacto</p>
        </div>
    </div>

    <!-- Sección de Videos / Blog -->
    <div class="row my-5">
        <h2 class="text-center text-primary">Nuestro Blog y Videos</h2>
        <p class="text-center text-muted">Conoce más sobre el cuidado de tus ojos y la salud visual a través de nuestros videos.</p>
        <div class="col-md-4 text-center">
            <div class="video-embed mb-3">
                <!-- Video 1 -->
                <iframe src="https://www.youtube.com/embed/video_id_1" title="Video de TikTok o similar 1" frameborder="0" allowfullscreen class="w-100" style="height: 200px;"></iframe>
            </div>
            <h5>Consejos para el Cuidado de la Vista</h5>
        </div>
        <div class="col-md-4 text-center">
            <div class="video-embed mb-3">
                <!-- Video 2 -->
                <iframe src="https://www.youtube.com/embed/video_id_2" title="Video de TikTok o similar 2" frameborder="0" allowfullscreen class="w-100" style="height: 200px;"></iframe>
            </div>
            <h5>Cómo Elegir tus Lentes</h5>
        </div>
        <div class="col-md-4 text-center">
            <div class="video-embed mb-3">
                <!-- Video 3 -->
                <iframe src="https://www.youtube.com/embed/video_id_3" title="Video de TikTok o similar 3" frameborder="0" allowfullscreen class="w-100" style="height: 200px;"></iframe>
            </div>
            <h5>Últimos Avances en Tecnología Óptica</h5>
        </div>
    </div>
</div>
@endsection
