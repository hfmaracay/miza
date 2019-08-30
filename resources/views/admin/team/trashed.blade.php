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
    <p>Papelera</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home fa-lg"></i></a></li>
    <li class="breadcrumb-item">Papelera</li>
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
                <th scope="row">{{ $team->deleted_at->format('d/m/Y') }}</th>
                <td>
                  <a href="{{ route('admin.team.restore', $team->id) }}"><i class="fas fa-undo"></i></a>
                  <form method="post" action="{{ route('admin.team.destroy', $team->id) }}" class="d-inline">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-link"><i class="fas fa-times"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
