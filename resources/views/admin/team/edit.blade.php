@extends('layouts.dashboard')

@section('title', 'Equipo')

@section('sidebar')
  @include('layouts._sidebar')
@endsection

@section('topbar')
  @include('layouts._topbar')
@endsection

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fas fa-images"></i> Equipo</h1>
    <p>Editar</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home fa-lg"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.team') }}">Equipo</a></li>
    <li class="breadcrumb-item">Editar</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="title">
      <div class="title-body">
         <div class="row">
          <div class="col-xs-12 col-sm-8 offset-sm-2">
            
            <form class="form-class needs-validation" id="con_form" novalidate method="POST" enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nombre" required value=" {{old('name', $team->name) }} " />
                <div class="invalid-feedback">
                  {{ $errors->has('name') ? $errors->first('name') : 'Nombre es Requerido' }}
                </div>
              </div>             
              <div class="form-group">
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" id="last_name" class="form-control 
                {{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder="Apellido" required 
                value="{{old('last_name', $team->last_name) }}"/>
                <div class="invalid-feedback">
                  {{ $errors->has('last_name') ? $errors->first('last_name') : 'Apellido es Requerido' }}
                </div>
              </div>
              <div class="form-group">
                <label for="title">Cargo</label>
                <input type="text" name="title" id="title" class="form-control 
                {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Cargo" required
                value="{{old('title', $team->title) }}" />
                <div class="invalid-feedback">
                  {{ $errors->has('title') ? $errors->first('title') : 'Cargo es Requerido' }}
                </div>
              </div>
              <div class="form-group">
                <label for="description">Descripición</label>
                <textarea name="description" cols="30" rows="5" class="form-control 
                {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Descripción" 
                required>{!!$team->description!!}</textarea>
                <div class="invalid-feedback">
                  {{ $errors->has('description') ? $errors->first('description') : 'Descripción es Requerida' }}
                </div>
              </div>

              <div class="form-group files">
                <label for="image">Foto </label>
                <input type="file" class="form-control" name="image" id="image">
                  <div class="invalid-feedback">
                    {{ $errors->has('image') ? $errors->first('image') : 'Imagen es Requerida' }}
                  </div>
              </div>

              <div class="text-center mb-4"><button class="btn btn-info">Guardar</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0 auto;

    width: 10% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 25%;
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
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: -5px;
    left: 0;  pointer-events: none;
    width: 10%;
    right: 0;
    height: 50%;
    content: " O Arrastra y suelta ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>
@endsection
