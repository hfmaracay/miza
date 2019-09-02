<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  @stack('metas')

  <title>@yield('title') | MIZA</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/MIZA.png') }}" />

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" />

  <!-- Styles SB-Admin-2 -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}" />

  <!-- Styles CFR -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" />

  @stack('styles')
</head>
<body class="bg-gradient-warning">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block">
                <div class="py-5">
                  <img src="{{ asset('img/MIZA.jpg') }}" alt="MIZA" title="MIZA" class="img-fluid" />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="p-5">
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
  
  @stack('scripts')
</body>
</html>

