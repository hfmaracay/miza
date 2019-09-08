@extends('layouts.dashboard')

@section('title', 'Usuarios')

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
    <li class="breadcrumb-item"><a href="{{ route('adminUsers') }}">Usuarios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Papelera</li>
  </ol>
</nav>
<div class="row">
  <div class="col">
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
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
            <th>Admin</th>
            <th width="100">Fecha</th>
            <th width="100">Acciones</th>
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
            <td>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="boton-rol{{ $user->id }}"  data-id="{{ $user->id }}" {{ $user->isAdmin() ? 'checked' : '' }} />
                <label class="custom-control-label" for="boton-rol{{ $user->id }} ">.</label>
              </div>
            </td>
            <td>{{ $user->deleted_at->format('d/m/Y') }}</td>
            <td>
              <a href="{{ route('adminUsers.restore', $user->id) }}"><i class="fas fa-undo"></i></a>
              <form method="post" action="{{ route('adminUsers.destroy', $user->id) }}" class="d-inline">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-link text-danger"><i class="fas fa-times"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection