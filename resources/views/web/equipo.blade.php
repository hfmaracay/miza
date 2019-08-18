@extends('layouts.layout')

@section('title', 'Equipo')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center ">
    <h1 class="h1 qsb col-sm-8 ">EQUIPO</h1>
  </div>
	<div class="row">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img height="284" src="{{ asset('img/bug2.png') }}">
         <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
      <img height="284" src="{{ asset('img/bug4.png') }}">
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img height="284" src="{{ asset('img/bug5.png') }}">
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img height="284" src="{{ asset('img/moth.png') }}">
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img height="284" src="{{ asset('img/maripozavzla.jpg') }}">
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
       <img height="284" src="{{ asset('img/bug3.png') }}">
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm text-white">Ver Ficha</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
