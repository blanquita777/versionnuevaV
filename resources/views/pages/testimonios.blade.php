@extends('layouts.app')

@section('content')
    <div class="testimonios-section">
        <h2>Deja tu Testimonio</h2>
        <form action="{{ route('testimonios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contenido">Testimonio</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Calificación</label>
                <div class="star-rating">
                    <input type="radio" name="rating" value="1" id="star1"><label for="star1">&#9733;</label>
                    <input type="radio" name="rating" value="2" id="star2"><label for="star2">&#9733;</label>
                    <input type="radio" name="rating" value="3" id="star3"><label for="star3">&#9733;</label>
                    <input type="radio" name="rating" value="4" id="star4"><label for="star4">&#9733;</label>
                    <input type="radio" name="rating" value="5" id="star5"><label for="star5">&#9733;</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Testimonio</button>
        </form>


        <h3>Testimonios</h3>
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
@endsection

<script src="{{ asset('js/testimonios.js') }}"></script>
