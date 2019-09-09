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
    <li class="breadcrumb-item active" aria-current="page">Mensaje</li>
  </ol>
</nav>
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detalle del Mensaje</h6>
      </div>
      <div class="card-body">
        <div class="row form-group">
          <label for="name" class="col-form-label col-sm-3">Nombre</label>
          <div class="form-text col-sm-9" id="name">{{ $message->name }}</div>
        </div>
        <div class="row form-group">
          <label for="email" class="col-form-label col-sm-3">Email</label>
          <div class="form-text col-sm-9" id="email">{{ $message->email }}</div>
        </div>
        <div class="form-group">
          <label for="description">Descripición</label>
          <div class="form-text" id="description">{{ $message->description }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
