@extends('layouts.layout')

@section('title', 'Contacto')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<section class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center">
    <h1 class="h1 qsb col-sm-8">CONTÁCTANOS</h1>
    <h2 class="h4 text-center">Déjanos un mensaje y a la brevedad te responderemos</h2>
  </div>
  <div class="row">
    <div class="bg-white shadow-sm rounded p-6 col-md-6 py-2">
      <form class="js-validate" novalidate="novalidate" action="post">
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
    <div class="col-md-6 py-2">
      <p>Museo del Instituto de Zoología Agrícola "Francisco Fernandez Yépez"<br />
        Facultad de Agronomía, Universidad Central de Venezuela<br />
        Maracay - Venezuela</p>
      <p>Dirección: Av 19 de Abril c/c Av Casanova Godoy UCV-Maracay</p>
      <p>Dirección General: <a href="mailto:miza.ucv@gmail.com">miza.ucv@gmail.com</a></p>
      <p>Coordinación de Colección: <a href="mailto:quintinarias@gmail.com">quintinarias@gmail.com</a></p>
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
