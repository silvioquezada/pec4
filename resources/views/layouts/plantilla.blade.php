<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="utf-8">
        <meta name="title" content="Index">
        <meta name="author" content="Silvio Quezada">
        <meta name="description" content="PEC 3 de la asignatura Desarrollo back-end con PHP">
        <meta name="viewport" content="width=device-width">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
      </head>
      <body class="contenedor">
        <header id="encabezado">
          <div class="boxlogo">
            <a href="index.html"><img src="{{ asset('img/logo.png') }}" class="logoencabezado" alt="Imagen Logo"></a>
            <span id="titulologo"><a href="index.html">ONGCA</a></span>
          </div>
        </header>
        
        <nav>
          <a href="#encabezado"
            id="enlace_menu"
            class="menu_hamburguesa"
            onclick="clickMenu()"   
          >☰</a>

          <div id="menu" class="navegacion">
            <ul>
              <li class="link_menu"><a href="">Home</a></li>
              <li class="link_menu"><a href="">Api_Noticias</a></li>
              <li class="link_menu"><a href="">Api_Noticia</a></li>

              @if (Route::has('login'))
                
                    @auth
                    <li class="link_menu"><a href="{{ url('/dashboard') }}"class="link_menu">Dashboard</a></li>
                    @else
                    <li class="link_menu"><a href="{{ route('login') }}"class="link_menu">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="link_menu"><a href="{{ route('register') }}" class="link_menu">Register</a></li>
                        @endif
                    @endauth
            
              @endif

            </ul>
          </div>

        </nav>
        
        
        <main>
          
        @yield('contenidoPrincipal')
          
        </main>
        
       
        
        <footer>
          <div bclass="boxlogo">
            <img src="{{ asset('img/logo.png') }}" class="logoencabezado" alt="Imagen Logo">
            <span id="titulologopie"><a href="index.html">ONGCA</a></span>
          </div>
          <div class="textomd">
            <div>2023 - Actividad realizada por Silvio Vinicio Quezada Puchaicela</div>
            <div>Web realizada con fines educativo</div>
            <div><a href="enlaces.html">Sitio Web diseñado de la asignatura - Desarrollo back-end con PHP</a></div>
          </div>
           
        </footer>
    
        <script src="js/menu.js"></script>
      </body>
</html>