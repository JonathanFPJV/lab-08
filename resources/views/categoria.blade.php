@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Categoría: </h2>
    <!-- Mostrar lista de productos de la categoría -->
</div>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ asset('images/polo.jpg') }}" height="350px" alt="UWU">

            <div class="card-body">
              <a href="{{ route('categorian.show', ['nombre' => 'Polos']) }}"><p class="card-text text-center">Polos</p></a>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ asset('images/camisa.jpg') }}"  height="350px" alt="UWU">

            <div class="card-body">
              <a href="{{ route('categorian.show', ['nombre' => 'Camisas']) }}"><p class="card-text text-center">Camisas</p></a>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ asset('images/polera.jpg') }}"  height="350px" alt="UWU">

            <div class="card-body">
              <a href="{{ route('categorian.show', ['nombre' => 'Poleras']) }}"><p class="card-text text-center">Poleras</p></a>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
    
    </div>

@endsection
