@extends('layouts.layout')

@section('title', 'Institución')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<section class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center">
    <h1 class="h1 qsb col-sm-8">{{ $content1->name }}</h1>
  </div>
  <div class="row">
    <div class="col-md-8">
      {!! $content1->description !!}
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail" src="{{ asset('img/MIZA_Sede.jpg') }}" alt="Sede MIZA" title="Sede MIZA" />
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>{{ $content2->name }}</h4>
      {!! $content2->description !!}
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>{{ $content3->name }}</h4>
      {!! $content3->description !!}
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>{{ $content4->name }}</h4>
      {!! $content4->description !!}
    </div>
  </div>
</section>
@endsection

@section('footer')
  @include('layouts._footer')
@endsection
