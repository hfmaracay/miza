@extends('layouts.sesion')

@section('content')
<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
</div>
<form method="POST" action="{{ route('login') }}" class="user needs-validation" novalidate>
  @csrf

  <div class="form-group">
    <label for="email" class="col-form-label sr-only">{{ __('Email') }}</label>
    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="password" class="col-form-label sr-only">{{ __('Password') }}</label>
    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required />
    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <div class="custom-control custom-checkbox small">
      <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
      <label class="custom-control-label" for="remember">
        {{ __('Recuerdame') }}
      </label>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary btn-user btn-block">
    {{ __('Login') }}
  </button>
</form>
<hr />
@if(Route::has('password.request'))
<div class="text-center">
  <a class="small" href="{{ route('password.request') }}">
    {{ __('¿Olvidó su contraseña?') }}
  </a>
</div>
@endif
@if(Route::has('register'))
<div class="text-center">
  <a class="small" href="{{ route('register') }}">{{ __('Registro') }}</a>
</div>
@endif
@endsection

@push('scripts')
<script>
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
})();
</script>
@endpush
