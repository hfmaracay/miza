<!-- Header -->
<section class="container-fluid header2 px-0 mx-0"> 
  <!-- Menu -->
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent col-12 align-self-start p-3">
    <div class="collapse navbar-collapse d-md-flex justify-content-end" id="menu">
      <ul class="navbar-nav mt-2 mt-lg-0 qs mr-sm-3">
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('welcome') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('institution') }}">Institución</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('team') }}">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ route('contact') }}">Contacto</a>
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
                <a class="nav-link text-uppercase" href="{{ route('register') }}">Registro</a>
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
  <div class="row d-flex justify-content-center align-items-center py-5">
    <div class="col-sm-8 text-center">
      <h1 class="text-white qsb">MUSEO DEL INSTITUTO DE ZOOLOGÍA AGRÍCOLA</h1>
      <h3 class="text-white qsb">"Francisco Fernandez Yépez"</h3>
      <img src="{{ asset('img/MIZA.jpg') }}" width="80" alt="MIZA" title="MIZA" />
    </div>
  </div>
</section>