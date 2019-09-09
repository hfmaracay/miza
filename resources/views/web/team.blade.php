@extends('layouts.layout')

@section('title', 'Equipo')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center ">
    <h1 class="h1 qsb col-sm-8">EQUIPO</h1>
  </div>
	<div class="row">
    @foreach($team as $person)
    <div class="col-md-4 mb-4">
      <div class="card mb-4 shadow-sm h-100">
        <img class="card-img-top" src="{{ asset($person->UrlPhoto) }}" alt="{{ $person->name }}" title="{{ $person->name }}" />
        <div class="card-body text-center">
          <h4>{{ $person->name.' '.$person->last_name }}</h4>
          <p class="card-text">{{ $person->title }}</p>
        </div>
        <div class="card-footer text-center">
          <a href="{{ route('team.show', $person) }}" class="btn btn-sm text-white mx-auto">Ver más</a>
        </div>
      </div>
    </div>
    @endforeach
    <div class="row">
      <div class="col-12 d-flex justify-content-center">{{ $team->links() }}</div>
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
