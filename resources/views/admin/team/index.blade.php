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
    <h1><i class="fas fa-users"></i> Equipo</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home fa-lg"></i></a></li>
    <li class="breadcrumb-item">Equipo</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="title">
      <div class="title-body">
        @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif
        <div class="card my-3">
          <div class="card-body">
            <form method="get" action="{{ route('admin.team') }}">
              @csrf
              <div class="form-row form-class">
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
        <div class="d-flex my-2 justify-content-end">
          <a href="{{ route('admin.team.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Agregar Nuevo</a>
          <a href="{{ route('admin.team.trashed') }}" class="btn btn-danger mx-2"><i class="fas fa-trash-restore"></i> Ver Papelera</a>
        </div>
        <div class="table-responsive">
          <table class="table table-striped" id="dataTable" width="100%">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th scope="col" width="50%">Cargo</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($teams as $team)
              <tr>
                <th scope="row">{{$team->name}}</th>
                <th scope="row">{{ $team->last_name }}</th>
                <th scope="row">{{ $team->title }}</th>
                <th scope="row">{{ $team->created_at->format('d/m/Y') }}</th>
                <td>
                  <a href="{{ route('admin.team.edit', $team) }}"><i class="fas fa-edit"></i></a>
                  <form method="post" action="{{ route('admin.team.trash', $team) }}" class="d-inline">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    <button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">{{ $teams->links() }}</div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
