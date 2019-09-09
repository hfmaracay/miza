@extends('layouts.layout')

@section('title', 'Noticias')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<div class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center ">
    <h1 class="h1 qsb col-sm-8 ">NOTICIAS</h1>
  </div>
	<div class="row">
    @foreach($news as $new)
    <div class="col-md-4 mb-4">
      <div class="card mb-4 shadow-sm h-100">
        <img class="card-img-top" src="{{ asset($new->UrlImage) }}" alt="{{ $new->name }}" title="{{ $new->name }}" />
        <div class="card-body">
          <h4 class="text-center">{{ $new->name }}</h4>
          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
        <div class="card-footer text-center">
          <a href="{{ route('news.show', $new) }}" class="btn btn-sm text-white mx-auto">Ver más</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">{{ $news->links() }}</div>
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
