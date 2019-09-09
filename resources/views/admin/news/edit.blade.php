@extends('layouts.dashboard')

@section('title', 'Editar Noticia')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" />
<style type="text/css">
.files input {
  outline: 2px dashed #92b0b3;
  outline-offset: -10px;
  -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
  transition: outline-offset .15s ease-in-out, background-color .15s linear;
  padding: 120px 0px 85px 35%;
  text-align: center !important;
  margin: 0;
  width: 100% !important;
}
.files input {
  outline: 2px dashed #92b0b3;
  outline-offset: -10px;
  -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
  transition: outline-offset .15s ease-in-out, background-color .15s linear;
  padding: 120px 0px 85px 35%;
  text-align: center !important;
  margin: 0;
  width: 100% !important;
}
.files input:focus {
  outline: 2px dashed #92b0b3;
  outline-offset: -10px;
  -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
  transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative; }
.files:after {
  pointer-events: none;
  position: absolute;
  top: 60px;
  left: 0;
  width: 50px;
  right: 0;
  height: 56px;
  content: "";
  background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
  display: block;
  margin: 0 auto;
  background-size: 100%;
  background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1; }
.files:before {
  position: absolute;
  bottom: -5px;
  left: 0;  pointer-events: none;
  width: 100%;
  right: 0;
  height: 57px;
  content: " O Arrastra y suelta ";
  display: block;
  margin: 0 auto;
  color: #2ea591;
  font-weight: 600;
  text-transform: capitalize;
  text-align: center;
}
</style>
@endpush

@section('sidebar')
  @include('layouts._sidebar')
@endsection

@section('topbar')
  @include('layouts._topbar')
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-newspaper"></i> Noticias</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('adminNews') }}">Noticias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>
<div class="row justify-content-md-center">
  <div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar Noticia</h6>
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
        <form id="form-update" name="form-update" method="POST" action="{{ route('adminNews.update', $news) }}" enctype="multipart/form-data" class="form-class needs-validation" novalidate>
          @csrf
          {{ method_field('PUT') }}
          <div class="form-group">
            <label for="name" class="sr-only">Título</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $news->name) }}" placeholder="Título" required />
            <div class="invalid-feedback">
              {{ $errors->has('name') ? $errors->first('name') : 'Título es Requerido' }}
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="sr-only">Descripición</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control textareacontent {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Descripción" required>{!! $news->description !!}</textarea>
            <div class="invalid-feedback">
              {{ $errors->has('description') ? $errors->first('description') : 'Descripción es Requerida' }}
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <img class="rounded img-fluid" src="{{ asset($news->UrlImage) }}" alt="Imagen" title="Imagen" />
            </div>
            <div class="col-md-8">
              <div class="form-group files">
                <label for="image" class="sr-only">Imagen</label>
                <input type="file" class="form-control" name="image" id="image" />
                <div class="invalid-feedback">
                  {{ $errors->has('image') ? $errors->first('image') : 'Imagen es Requerida' }}
                </div>
              </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
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

  $('.textareacontent').summernote({
    placeholder: 'Descripción',
    tabsize: 2,
    height: 300
  });
})();
</script>
@endpush
