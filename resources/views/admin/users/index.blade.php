@extends('layouts.dashboard')

@push('metas')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@section('title', 'Usuarios')

@push('styles')
  <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" />
@endpush

@section('sidebar')
  @include('layouts._sidebar')
@endsection

@section('topbar')
  @include('layouts._topbar')
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-address-card"></i> Usuarios</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
  </ol>
</nav>
<div class="row">
  <div class="col">
    <div id="message" class="alert alert-success {{ (!session()->has('message')) ? 'd-none' : '' }}">
      {{ session()->has('message') ? session()->get('message') : '' }}
    </div>
    <div class="card my-3">
      <div class="card-body">
        <form method="get" action="{{ route('adminUsers') }}">
          @csrf
          <div class="form-row">
            <div class="col-md-5">
              <input type="text" id="search" name="search" class="form-control" placeholder="Buscar..." value="{{ request('search') }}" />
            </div>
            <div class="col-md-3">
              <input type="text" id="from" name="from" class="form-control" placeholder="Fecha Desde" value="{{ request('from') }}" readonly />
            </div>
            <div class="col-md-3">
              <input type="text" id="to" name="to" class="form-control" placeholder="Fecha Hasta" value="{{ request('to') }}" readonly />
            </div>
            <div class="col-md-1">
              <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mt-2">
              <strong class="text-primary">Rol:</strong>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="admin" name="role" value="admin" {{ request('role') == 'admin' ? 'checked' : '' }} />
                <label class="custom-control-label" for="admin">Admin</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="user" name="role" value="user" {{ request('role') == 'user' ? 'checked' : '' }} />
                <label class="custom-control-label" for="user">User</label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="d-flex my-2 justify-content-end">
      <a href="{{ route('adminUsers.trashed') }}" class="btn btn-danger"><i class="fas fa-trash-restore"></i> Ver Papelera</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th width="100">Fecha</th>
            <th width="100">Admin</th>
            <th width="110">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ str_pad($user->id, 4, "0", STR_PAD_LEFT) }}</td>
            <td>
              {{ $user->name }}<br />
              {{ $user->email }}
            </td>
            <td>{{ $user->created_at->format('d/m/Y') }}</td>
            <td>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input boton-rol" id="boton-rol{{ $user->id }}"  data-id="{{ $user->id }}" {{ $user->isAdmin() ? 'checked' : '' }} />
                <label class="custom-control-label" for="boton-rol{{ $user->id }}">.</label>
              </div>
            </td>
            <td>
              <a href="{{ route('adminUsers.edit', $user) }}"><i class="fas fa-user-edit"></i></a> 
              <a href="{{ route('adminUsers.password', $user->id) }}"><i class="fas fa-lock"></i></a> 
              @if($user->id != Auth::id())
              <form method="post" action="{{ route('adminUsers.trash', $user) }}" class="d-inline">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <button type="submit" class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 d-flex justify-content-center">{{ $users->links() }}</div>
</div>
@endsection

@push('scripts')
<!-- include gijgo js (datapiker) -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  $('#from').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    format: 'dd/mm/yyyy',
    maxDate: function () {
      return $('#to').val();
    }
  });

  $('#to').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    format: 'dd/mm/yyyy',
    minDate: function () {
      return $('#from').val();
    }
  });

  $('.boton-rol').change(function() {
    let id = $(this).data('id');
    let marca = 0;

    if($(this).prop('checked')) {
      marca = 1;
    }

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/admin/usuarios/' + id + '/rol',
      type: "put",
      dataType: "json",
      data: {},
      success: function (data) {
        $('#message').removeClass('d-none').text('Rol cambiado correctamente');
      },
      error: function (data) {
        let errores = data.responseJSON;
        console.log(errores);
      }
    });
  });
})();
</script>
@endpush
