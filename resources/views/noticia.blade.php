@extends('layouts.plantilla')
@section('contenidoPrincipal')

<article class="contenedorcontenido">

    <div class="boxdetalle">
        <h1 class="textotitulo">{{ $noticia->titulo }}</h1>
        <p>{{ $noticia->fecha_publicacion }}</p>
        
        <div class="seccionboxfotodetalle">
        <img src="<?= $noticia->imagen; ?>" class="fotosecciondetalle" alt="Imagen <?= $noticia->titulo; ?>">
        </div>

        <div><?= $noticia->contenido ?></div>
    </div>

</article>

@endsection