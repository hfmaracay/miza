<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>MIZA - MUSEO DEL INSTITUTO DE ZOOLOGÍA AGRÍCOLA "Francisco Fernandez Yépez"</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/MIZA.png') }}" />

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
            <a class="nav-link text-uppercase" href="{{ route('institution') }}">Institución</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="{{ route('team') }}">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="{{ route('news') }}">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="{{ route('contact') }}">Contacto</a>
          </li>
          {{-- @if(Route::has('login'))
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
                  <a class="nav-link text-uppercase" href="{{ route('register') }}">Registro</a>
                </li>
              @endif
            @endauth
          @endif --}}
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
      <img src="{{ asset('img/MIZA.jpg') }}" width="80" alt="MIZA" title="MIZA" />
    </div>
  </section>

  <!-- Seccion Quienes Somos -->
  <div class="bug text-right mt-n5">
    <img class="mt-n5" style="margin-right:-80px; width: 300px" src="{{ asset('img/Callicore_pitheas.png') }}" alt="Callicore_pitheas" title="Callicore_pitheas" />
  </div>
  <section class="container mt-n3">
    <div class="pb-5 text-center row d-flex align-items-center justify-content-center">
      <h1 class="h1 qsb col-sm-8 ">{{ $content1->name }}</h1>
    </div>
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-sm-6">
        <img class="img-thumbnail" src="{{ asset('img/MIZA_Sede.jpg') }}" alt="Sede MIZA" title="Sede MIZA" />
      </div>
      <div class="col-sm-6  text-center">
        <p class="lead text-justify">{{ $content1->description }}</p>
        <a class="btn mx-auto text-white" href="{{ route('institution') }}">Ver más</a>
      </div>
    </div>
  </section>

  <!-- Seccion Refran -->
  <div class="bug text-left ml-n5 mb-n5">
    <img class="mb-n5" style="width: 250px" src="{{ asset('img/Diaetrhria_clymena.png') }}" alt="Diaetrhria_clymena" title="Diaetrhria_clymena" />
  </div>
  <section class="container-fluid my-5 py-5 banner-quote">
    <blockquote class="blockquote text-center text-white py-5">
      <p class="mb-0 h2 qsb">{{ $content2->description }}</p>
      <footer class="blockquote-footer text-white">{{ $content2->name }}</footer>
    </blockquote>
  </section>

  <!-- Seccion Noticias -->
  <section class="container">
    <div class="row">
      <div class="col-12 py-5">
        <h2 class="text-center qsb h1">NOTICIAS RECIENTES</h2>
      </div>
      @foreach($news as $new)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm p-3 h-100">
          <img class="card-img-top" src="{{ asset($new->UrlImage) }}" alt="{{ $new->name }}" title="{{ $new->name }}" /> 
          <div class="card-body">
            <h4 class="text-center">{{ $new->name }}</h4>
            {{-- <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
          </div>
          <div class="card-footer text-center">
            <a href="{{ route('news.show', $new) }}" class="btn btn-sm text-white mx-auto">Ver más</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- Footer -->
  <section class="container-fluid bg-brown mt-5">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-4 text-center">
        <img src="{{ asset('img/MIZA.jpg') }}" width="70" alt="MIZA" title="MIZA" class="mx-2" />
        <img src="{{ asset('img/FAGRO.jpg') }}" width="70" alt="FAGRO" title="FAGRO" class="mx-2" />
        <img src="{{ asset('img/UCV.png') }}" width="70" alt="UCV" title="UCV" class="mx-2" />
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 text-center">
        <p class="text-white lead">
          Museo del Instituto de Zoología Agrícola "Francisco Fernandez Yépez"<br />
          Facultad de Agronomía, Universidad Central de Venezuela<br />
          Maracay - Venezuela
        </p>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <p class=" text-white text-center f-14 lead">
          <a class="link-white" href="mailto:miza.ucv@gmail.com">miza.ucv@gmail.com</a>
        </p>
      </div>
    </div>
    <div class="row d-flex justify-content-center pt-5">
      <div class="col-md-4 text-center">
        <p class=" text-white text-center f-12">Desarrollado por <a class="link-white" href="https://hfmaracay.com.ve/" target="_blank">H/F Maracay</a> | Diseñado por <a class="link-white" href="https://www.instagram.com/melendesigns" target="_blank">@melendesigns</a></p>
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
