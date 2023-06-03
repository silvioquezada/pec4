@extends('layouts.plantilla')
@section('contenidoPrincipal')
<article class="contenedorcontenido">
    <div>
        <h1 class="textotitulo">Lugares Turísticos en El Oro</h1>

        <p class="textocontenido">Te guiamos por El Oro - Ecuador, podrás encontrar entre sus más notables atractivos turísticos de carácter natural como histórico y cultural todo lo que esta dorada provincia puede ofrecerte y que visitarla debe estar en tu lista de planes.</p>
    </div>
</article>

<table class="default">
@foreach($noticias as $noticia)
  <tr>
    <td>{{ $noticia->id }}</td>
    <td>{{ $noticia->apellido }}</td>
    <td>{{ $noticia->nombre }}</td>
  </tr>
@endforeach
</table>

@endsection