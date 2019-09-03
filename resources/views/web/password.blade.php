@extends('layouts.dashboard')

@section('title', 'Cambio de Contraseña')

@section('menu_principal')
  @include('layouts.menu')
@endsection

@section('menu_lateral')
  @include('layouts.menu_dashboard')
@endsection

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fas fa-user-lock"></i> Cambio de Contraseña</h1>
    <p>Seguridad</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home fa-lg"></i></a></li>
    <li class="breadcrumb-item">Cambio de Contraseña</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
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
        <div class="card">
          <div class="card-body">
            <form class="form-class needs-validation" id="con_form" method="POST" action="{{ route('profileUpdatePassword') }}" novalidate>
              @csrf
              {{ method_field('put') }}
              <div class="form-group">
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Contraseña Actual" required>
                <div class="invalid-feedback">
                  {{ $errors->has('password') ? $errors->first('password') : 'Contraseña Actual es Requerida' }}
                </div>
              </div>
              <div class="form-group">
                <input type="password" name="newPassword" class="form-control {{ $errors->has('newPassword') ? 'is-invalid' : '' }}" placeholder="Contraseña Nueva" required>
                <div class="invalid-feedback">
                  {{ $errors->has('newPassword') ? $errors->first('newPassword') : 'Contraseña Nueva es Requerida' }}
                </div>
              </div>
              <div class="form-group">
                <input type="password" name="newPassword_confirmation" class="form-control {{ $errors->has('newPassword_confirmation') ? 'is-invalid' : '' }}" placeholder="Repita Contraseña Nueva" required>
                <div class="invalid-feedback">
                  {{ $errors->has('newPassword_confirmation') ? $errors->first('newPassword_confirmation') : 'Repetir Contraseña es Requerido' }}
                </div>
              </div>
              <div class="text-center"><button class="site-btn">Enviar</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
