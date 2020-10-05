@extends('layouts.layout')

@section('title', 'Equipo')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center ">
    <h1 class="h1 qsb col-sm-8">{{ $team->name.' '. $team->last_name }}</h1>
  </div>
	<div class="row">
    <div class="col-md-4">
      <img class="img-fluid rounded" src="{{ asset($team->UrlPhoto) }}" alt="{{ $team->name.' '. $team->last_name }}" title="{{ $team->name.' '. $team->last_name }}" />
    </div>
    <div class="col-md-8">
      <h3>{{ $team->title }}</h3>
      {!! $team->description !!}
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
