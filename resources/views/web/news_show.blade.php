@extends('layouts.layout')

@section('title', 'Noticias')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center ">
    <h1 class="h1 qsb col-sm-8 ">{{ $news->name }}</h1>
  </div>
	<div class="row">
    <div class="col-md-4">
      <img class="img-fluid rounded" src="{{ asset($news->UrlImage) }}" alt="{{ $news->name }}" title="{{ $news->name }}" />
      <p class="my-3 text-secondary">Fecha: {{ $news->created_at->format('d/m/Y') }}</p>
    </div>
    <div class="col-md-8">
      {!! $news->description !!}
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
