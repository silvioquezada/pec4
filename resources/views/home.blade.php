@extends('layouts.plantilla')
@section('contenidoPrincipal')
<article class="contenedorcontenido">
   
@foreach($noticias as $noticia)

  <div class="boxitemspresentacion">
        <div class="boxitemspresentacionfondo">
            <p class="textosubtitulo">{{ $noticia->titulo }}</p>
            <p class="textosm">{{ $noticia->fecha_publicacion }}</p>
            <div class="boxpresentacion">
                <img src="<?= $noticia->imagen; ?>" class="fotocardpresentacion" alt="Imagen <?= $noticia->titulo; ?>">
                <div>{{ $noticia->descripcion }}</div>
            </div>
            <a class="textoenlace" href="post.php?id=<?= $noticia->id; ?>">Leer</a>
        </div>
    </div>

@endforeach

</article>





@endsection