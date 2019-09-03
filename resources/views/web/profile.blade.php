@extends('layouts.dashboard')

@section('meta-extras')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('title', 'Perfil')

@section('menu_principal')
    @include('layouts.menu')
@endsection

@section('menu_lateral')
    @include('layouts.menu_dashboard')
@endsection

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fas fa-user"></i> Perfil</h1>
    <p>Completa o edita tu perfil</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home fa-lg"></i></a></li>
    <li class="breadcrumb-item">Perfil</li>
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
        <form id="form-personal" name="form-personal" method="POST" action="{{ route('profileUpdate') }}" class="form-class needs-validation" novalidate>
          @csrf
          {{ method_field('put') }}
          <div class="row">
            <div class="col-md-2">
              <div class="foto-perfil">
                <img class="rounded img-fluid" src="{{ asset('img/usuario_hombre.jpg') }}" alt="Usuario"/>
                <div class="adj-foto">
                  <div class="form-group">
                    <label for="photo" class="sr-only">Foto</label>
                    <input type="file" id="photo" name="photo" class="form-control filestyle photo" placeholder="Foto" data-input="false"/>
                    <div class="invalid-feedback">
                      {{ $errors->has('photo') ? $errors->first('photo') : 'Foto inválida' }}
                    </div>
                  </div> 
                </div>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="gender" id="female" value="1" {{ old('gender', optional(Auth::user()->profile)->gender) == 1 ? 'checked' : '' }} />
                <label class="custom-control-label" for="female">Femenino</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="gender" id="male" value="2" {{ old('gender', optional(Auth::user()->profile)->gender) == 2 ? 'checked' : '' }} />
                <label class="custom-control-label" for="male">Masculino</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input class="custom-control-input" type="radio" name="gender" id="lgbt" value="3" {{ old('gender', optional(Auth::user()->profile)->gender) == 3 ? 'checked' : '' }} />
                <label class="custom-control-label" for="lgbt">Otro</label>
              </div>
            </div>
            <div class="col-md-10">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name" class="sr-only">Nombre y Apellido</label>
                  <input type="text" id="name" name="name" placeholder="Nombre y Apellido" value="{{ old('name', Auth::user()->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('name') ? $errors->first('name') : 'Nombre y Apellido es Requerido' }}
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="identification" class="sr-only">Identificación</label>
                  <input type="text" id="identification" name="identification" placeholder="Identificación" value="{{old('identification', optional(Auth::user()->profile)->identification) }}" class="form-control {{ $errors->has('identification') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('identification') ? $errors->first('identification') : 'Identificación es Requerido' }}
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('email') ? $errors->first('email') : 'Email es Requerido' }}
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="phone" class="sr-only">Teléfono</label>
                  <input type="text" id="phone" name="phone" placeholder="Teléfono" value="{{ old('phone', optional(Auth::user()->profile)->phone) }}" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('phone') ? $errors->first('phone') : 'Teléfono es Requerido' }}
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="pais" class="sr-only">Países</label>
                  <select id="pais" name="pais" class="form-control {{ $errors->has('pais') ? 'is-invalid' : '' }}" required>
                    <option value="" selected>Países</option>
                    @foreach($paises as $pais)
                    <option value="{{ $pais->id }}" {{ old('pais', optional(Auth::user()->profile)->pais_id) == $pais->id ? 'selected' : '' }}>{{ $pais->nombre }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">
                    {{ $errors->has('pais') ? $errors->first('pais') : 'País es Requerido' }}
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="city" class="sr-only">Ciudad</label>
                  <input type="text" id="city" name="city" placeholder="Ciudad" value="{{ old('city', optional(Auth::user()->profile)->city) }}" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('city') ? $errors->first('city') : 'Ciudad es Requerido' }}
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <label for="direction" class="sr-only">Dirección</label>
                  <input type="text" id="direction" name="direction" placeholder="Dirección" value="{{ old('direction', optional(Auth::user()->profile)->direction) }}" class="form-control {{ $errors->has('direction') ? 'is-invalid' : '' }}" required />
                  <div class="invalid-feedback">
                    {{ $errors->has('direction') ? $errors->first('direction') : 'Dirección es Requerido' }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="site-btn">Guardar</button>
          </div>
          @if(Auth::user()->profile()->exists())
          <hr />
          <div class="row justify-content-around">
            @if(!Auth::user()->company()->exists())
            <div class="col-md-4">
              <a href="{{ route('companyCreate') }}" class="btn btn-block btn-secondary">Registrar Empresa</a>
            </div>
            @endif
            @if(!Auth::user()->coach()->exists())
            <div class="col-md-4">
              <a href="{{ route('coachCreate') }}" class="btn btn-block btn-info mb-3">Regitrar Perfil Coach</a>
            </div>
            @endif
          </div>
          @endif
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script-extras')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
<script>
  $(".photo:file").filestyle({
    text: "Foto", 
    input: false,
    htmlIcon:' <i class="fas fa-image"></i>'
  });
</script>
@endsection
