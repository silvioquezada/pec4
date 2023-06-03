@extends('layouts.plantilla')
@section('contenidoPrincipal')
<article class="contenedorcontenido">
   
@foreach($noticias as $noticia)

  <div class="boxitemspresentacion">
        <div class="boxitemspresentacionfondo">
            <p class="textosubtitulo"><a class="textoenlace" href="noticia/<?= $noticia->id; ?>">{{ $noticia->titulo }}</a></p>
            <div class="boxpresentacion">
                <img src="<?= $noticia->imagen; ?>" class="fotocardpresentacion" alt="Imagen <?= $noticia->titulo; ?>">
            </div>
            <p class="textosm">{{ $noticia->fecha_publicacion }}</p>
        </div>
    </div>

@endforeach

</article>

@endsection