@extends('layouts.layout')

@section('title', 'Contacto')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<section class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center">
    <h1 class="h1 qsb col-sm-8">CONTACTANOS</h1>
  </div>
  <div class="row">
    <div class="bg-white shadow-sm rounded p-6 col-sm-6 py-2">
      <form class="js-validate" novalidate="novalidate" action="post">
        <div class="mb-4">
          <h2 class="h4 text-center">Déjanos un mensaje y a la brevedad te responderemos</h2>
        </div>
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group input-group form">
            <input type="text" class="form-control form__input" name="username" required="" placeholder="Nombre y Apellido" aria-label="Ingrese su nombre y apellido">
          </div>
        </div>
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group input-group form">
            <input type="email" class="form-control form__input" name="email" required="" placeholder="Email" aria-label="Ingrese su email">
          </div>
        </div>
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group input-group form">
            <textarea class="form-control form__input" name="mensaje" required="" placeholder="Escriba su mensaje" aria-label="Escriba su mensaje"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-block text-white">Enviar Mensaje</button>
      </form>
    </div> 
    <div class="col-sm-6 py-2">
      <!--Google map-->
      <div id="map-container-google-1" class="z-depth-1-half map-container" >
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;  height:300px; width:100%" allowfullscreen></iframe>
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
  $(document).ready(function() {
    $("#form-login").submit(function(ev) {
      if(this.checkValidity() === false) {
        ev.preventDefault();
        ev.stopPropagation();
        console.log("Error");
        this.classList.add('was-validated');
      } else {
        console.log("Enviado");
        // this.classList.remove('was-validated');
      }
    });
  });
</script>
@endpush
