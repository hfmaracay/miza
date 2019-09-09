@extends('layouts.layout')

@section('title', 'Contacto')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<section class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center">
    <h1 class="h1 qsb col-sm-8">{{ $content->name }}</h1>
    <h2 class="h4 text-center">Déjanos un mensaje y a la brevedad te responderemos</h2>
  </div>
  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <div class="row">
    <div class="bg-white shadow-sm rounded p-6 col-md-6 py-2">
      <form id="form-contact" name="form-contact" method="POST" action="{{ route('contact.store') }}" class="form-class needs-validation" novalidate>
        @csrf
        <div class="form-group">
          <label for="name" class="sr-only">Nombre y Apellido</label>
          <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Nombre y Apellido" required />
          <div class="invalid-feedback">
            {{ $errors->has('name') ? $errors->first('name') : 'Nombre y Apellido es Requerido' }}
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="sr-only">Email</label>
          <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Ingrese su Email" required />
          <div class="invalid-feedback">
            {{ $errors->has('email') ? $errors->first('email') : 'Email es Requerido' }}
          </div>
        </div>
        <div class="form-group">
          <label for="description" class="sr-only">Mensaje</label>
          <textarea name="description" id="description" cols="30" rows="4" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Escriba su mensaje" required>{{ old('description') }}</textarea>
          <div class="invalid-feedback">
            {{ $errors->has('description') ? $errors->first('description') : 'Mensaje es Requerido' }}
          </div>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-block text-white">Enviar Mensaje <i class="fa fa-envelope"></i></button>
        </div>
      </form>
    </div> 
    <div class="col-md-6 py-2">
      {!! $content->description !!}
    </div>          
  </div>
  <div class="row">
    <div class="col-12 mt-4">
      <!--Google map-->
      <div id="map-container-google-1" class="z-depth-1-half map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.945659667849!2d-67.6121266858872!3d10.265962271216708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803b7086876ce1%3A0x8783907de64c4406!2sMuseo+del+Instituto+de+Zoolog%C3%ADa+Agr%C3%ADcola+UCV+(MIZA)!5e0!3m2!1ses-419!2sve!4v1566174638121!5m2!1ses-419!2sve" frameborder="0" style="border:0; height:300px; width:100%" allowfullscreen></iframe>
      </div>
      <!--Google Maps-->
    </div>
  </div>
</section>
@endsection

@section('footer')
  @include('layouts._footer')
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
