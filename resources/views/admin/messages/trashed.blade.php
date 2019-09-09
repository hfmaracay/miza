@extends('layouts.dashboard')

@section('title', 'Mensajes')

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
    <li class="breadcrumb-item"><a href="{{ route('adminMessages') }}">Mensajes</a></li>
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
            <th>Nombre</th>
            <th>Email</th>
            <th width="100">Fecha</th>
            <th width="100">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($messages as $message)
          <tr>
            <td>{{ str_pad($message->id, 4, "0", STR_PAD_LEFT) }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->deleted_at->format('d/m/Y') }}</td>
            <td>
              <a href="{{ route('adminMessages.restore', $message->id) }}"><i class="fas fa-undo"></i></a>
              <form method="post" action="{{ route('adminMessages.destroy', $message->id) }}" class="d-inline">
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
