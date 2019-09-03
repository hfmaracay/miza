@extends('layouts.dashboard')

@section('meta-extras')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('title', 'Perfil')

@section('sidebar')
  @include('layouts._sidebar')
@endsection

@section('topbar')
  @include('layouts._topbar')
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-user"></i> Perfil</h1>
<p>Completa o edita tu perfil</p>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
  </ol>
</nav>

<div class="row justify-content-md-center">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar Perfil</h6>
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
        <form id="form-profile" name="form-profile" method="POST" action="{{ route('profileUpdate') }}" class="form-class needs-validation" novalidate>
          @csrf
          {{ method_field('put') }}
          <div class="form-group">
            <label for="name" class="sr-only">Nombre y Apellido</label>
            <input type="text" id="name" name="name" placeholder="Nombre y Apellido" value="{{ old('name', Auth::user()->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required />
            <div class="invalid-feedback">
              {{ $errors->has('name') ? $errors->first('name') : 'Nombre y Apellido es Requerido' }}
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required />
            <div class="invalid-feedback">
              {{ $errors->has('email') ? $errors->first('email') : 'Email es Requerido' }}
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
