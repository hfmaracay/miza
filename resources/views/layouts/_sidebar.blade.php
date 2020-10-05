<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
    <div class="sidebar-brand-icon">
      {{-- <i class="fas fa-laugh-wink"></i> --}}
      <img src="{{ asset('img/MIZA.jpg') }}" width="40" alt="MIZA" title="MIZA" class="rounded-circle" />
    </div>
    <div class="sidebar-brand-text mx-3">MIZA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  @if(Auth::user()->isAdmin())
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adminUsers') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Usuarios</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adminContents') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Contenidos</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adminTeams') }}">
      <i class="fas fa-fw fa-address-card"></i>
      <span>Equipo</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adminNews') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Noticias</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adminMessages') }}">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Contacto</span>
    </a>
  </li>
  @endif

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Sesión
  </div>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Perfil</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('password') }}">
      <i class="fas fa-fw fa-lock"></i>
      <span>Password</span>
    </a>
  </li>

  <!-- Nav Item -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Salir</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>