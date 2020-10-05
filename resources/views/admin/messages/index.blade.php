@extends('layouts.dashboard')

@section('title', 'Mensajes')

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
<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-envelope"></i> Mensajes</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Mensajes</li>
  </ol>
</nav>
<div class="row">
  <div class="col">
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
    <div class="card my-3">
      <div class="card-body">
        <form method="get" action="{{ route('adminMessages') }}">
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
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="d-flex my-2 justify-content-end">
      <a href="{{ route('adminMessages.trashed') }}" class="btn btn-danger mx-2"><i class="fas fa-trash-restore"></i> Ver Papelera</a>
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
            <th>Nombre</th>
            <th>Email</th>
            <th width="100">Fecha</th>
            <th width="100">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($messages as $message)
          <tr>
            <td>
              <a href="{{ route('adminMessages.show', $message) }}">
                {{ str_pad($message->id, 4, "0", STR_PAD_LEFT) }}
              </a>
            </td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->created_at->format('d/m/Y') }}</td>
            <td>
              <form method="post" action="{{ route('adminMessages.trash', $message) }}" class="d-inline">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <button type="submit" class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 d-flex justify-content-center">{{ $messages->links() }}</div>
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
})();
</script>
@endpush
