<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>MIZA - MUSEO DEL INSTITUTO DE ZOOLOGÍA AGRÍCOLA "Francisco Fernandez Yépez"</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Quicksand&display=swap" />

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <!-- Header -->
  <section class="container-fluid header row px-0 mx-0"> 
    <!-- Menu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent col-12 align-self-start p-3 ">
      <div class="collapse navbar-collapse d-md-flex justify-content-end" id="menu">
        <ul class="navbar-nav mt-2 mt-lg-0 qs mr-sm-3">
          <li class="nav-item active">
            <a class="nav-link text-uppercase" href="{{ route('welcome') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#">Base de Datos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="{{ route('equipo') }}">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="{{ route('contacto') }}">Contacto</a>
          </li>
          @if(Route::has('login'))
            @auth
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{ url('/home') }}">Home</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{ route('login') }}">Login</a>
              </li>
              @if(Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link text-uppercase" href="{{ route('register') }}">Register</a>
                </li>
              @endif
            @endauth
          @endif
        </ul>  
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    
    <!-- Titulo -->
    <div class="col-5 text-md-center ml-md-auto ">
      <h1 class="text-white qsb mr-sm-3" >MUSEO DEL INSTITUTO DE ZOOLOGÍA AGRÍCOLA</h1>
      <h3 class="text-white qsb mr-sm-3" >"Francisco Fernandez Yépez"</h3>
      <img src="{{ asset('img/logo-miza-2014.png') }}" alt="MIZA" title="MIZA" />
    </div>
  </section>

  <!-- Seccion Quienes Somos -->
  <div class="bug text-right mt-n5">
    <img class="mt-n5" style="margin-right:-100px" src="{{ asset('img/bug2.png') }}" alt="Bug" title="Bug" />
  </div>
  <section class="container mt-n3">
    <div class="pb-5 text-center row d-flex align-items-center justify-content-center">
      <h1 class="h1 qsb col-sm-8 ">El 2do museo de insectos MÁS GRANDE de Latinoamérica</h1>
    </div>
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-sm-6">
        <img class="img-thumbnail" src="{{ asset('img/miza.jpg') }}" alt="Sede MIZA" title="Sede MIZA" />
      </div>
      <div class="col-sm-6  text-center">
        <p class="lead text-justify">EI Museo del Instituto de Zoología Agrícola “Francisco Fernández Yépez” (MIZA), es una institución dedicada al estudio de la biodiversidad tropical. Tenemos la convicción de que el conocimiento de nuestro patrimonio biológico está íntimamente relacionado con su preservación y uso sostenible, es por ello que la educación ambiental es una herramienta vital para formar ciudadanos conscientes y protectores de nuestro patrimonio biológico.</p>
        <button type="button" class="btn mx-auto text-white"> Ver más</button>
      </div>
    </div>
  </section>

  <!-- Seccion Refran -->
  <div class="bug text-left ml-n5 mb-n5">
    <img class="mb-n5" style="width: 250px" src="{{ asset('img/polilla.png') }}" alt="Polilla" title="Polilla" />
  </div>
  <section class="container-fluid my-5 py-5 banner-quote ">
    <blockquote class="blockquote text-center text-white py-5">
      <p class="mb-0 h2 qsb">La mariposa no cuenta meses sino momentos, y tiene tiempo suficiente.</p>
      <footer class="blockquote-footer text-white">Rabindranath Tagore</footer>
    </blockquote>
  </section>

  <!-- Seccion Noticias -->
  <section class="container">
    <div class="row">
      <div class="col-12 py-5">
        <h2 class="text-center qsb h1">NOTICIAS RECIENTES</h2>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm p-3">
          <img src="{{ asset('img/not1.jpg') }}" alt="EcoPrácticas en MIZA" title="EcoPrácticas en MIZA" /> 
          <div class="card-body">
            <h4 class="text-center">EcoPrácticas en MIZA</h4>
            <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-sm text-white mx-auto">Ver más</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm p-3">
          <img src="{{ asset('img/not2.jpg') }}" alt="Visita Dr. Huber" title="Visita Dr. Huber" />
          <div class="card-body">
            <h4 class="text-center">Visita Dr. Huber</h4>
            <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-sm text-white mx-auto">Ver más</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm p-3">
          <img src="{{ asset('img/not3.jpg') }}" alt="Biólogo Belga en MIZA" title="Biólogo Belga en MIZA" />
          <div class="card-body">
            <h4 class="text-center">Biólogo Belga en MIZA</h4>
            <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-sm text-white mx-auto">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section class="container-fluid bg-brown mt-5">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-4 text-center">
        <img src="{{ asset('img/logo-miza-2014.png') }}" width="70px" alt="MIZA" title="MIZA" />
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 text-center">
        <p class="text-white lead">
          Museo del Instituto de Zoología Agrícola "Francisco Fernandez Yépez"<br />
          Facultad de Agronomía, Universidad Central de Venezuela<br />
          Apdo 4579, Maracay 2101A, Venezuela
        </p>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <p class=" text-white text-center f-14 lead">vsgioia@gmail.com<br />quintinarias@gmail.com</p>
      </div>
    </div>
    <div class="row d-flex justify-content-center pt-5">
      <div class="col-md-4 text-center">
        <p class=" text-white text-center f-12">Desarrollado por @hfmaracay | Diseñado por @melendesigns</p>
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
