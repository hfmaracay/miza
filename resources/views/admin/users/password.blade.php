@extends('layouts.dashboard')

@section('title', 'Editar Password')

@section('sidebar')
  @include('layouts._sidebar')
@endsection

@section('topbar')
  @include('layouts._topbar')
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-address-card"></i> Usuarios</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('adminUsers') }}">Usuarios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar Password</li>
  </ol>
</nav>
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar Password</h6>
      </div>
      <div class="card-body">
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
          {{ session()->get('message') }}
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form id="form-password" name="form-password" method="POST" action="{{ route('adminUsers.updatePassword', $user) }}" enctype="multipart/form-data" class="form-class needs-validation" novalidate>
          @csrf
          {{ method_field('PUT') }}
          <div class="form-group">
            <label for="password" class="sr-only">Contraseña Nueva</label>
            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Contraseña Nueva" required />
            <div class="invalid-feedback">
              {{ $errors->has('password') ? $errors->first('password') : 'Contraseña es Requerida' }}
            </div>
          </div>
          <div class="form-group">
            <label for="password_confirmation" class="sr-only">Repita Contraseña Nueva</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Repita Contraseña Nueva" required />
            <div class="invalid-feedback">
              {{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : 'Repetir Contraseña es Requerido' }}
            </div>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endpush
