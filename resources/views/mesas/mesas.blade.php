<style type="text/css">
  .infoMesas .card-body{
    padding: 10px !important;
    text-align: center;
  }
  .mesasList .card-body{
    cursor: pointer;
  }
  .mesasList .card-body a{
    text-decoration: none;
    color: #fff;
  }
</style>
@extends('layout')

@section('title','Home')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Descargar Reporte</a>
    </div>

    @include('partials/informe-ventas')

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 offset-md-1 text-center" style="border-right: 1px solid">

          <!-- Project Card Example -->
          <!-- Color System -->
          <div class="row mesasList">

              @forelse($mesas as $mesa)               

                <div class="col-lg-4 mb-3">
                  <div class="card {{ $mesa->estado == 1 ? 'bg-danger' : 'bg-success'  }} text-white shadow">
                    <div class="card-body">
                      <a href="/mesa/{{ $mesa->id}}">Mesa {{ $mesa->id}} </a>
                    </div>
                  </div>
                </div>
              @empty
                <p>No hay mesas para mostrar</p>
              @endforelse
              {{ $mesas->links() }}  
                    

          </div>
        </div>

        <div class="col-lg-5 infoMesas">
          <div class="col-lg-4 mb-3">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Mesa Disponible
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Mesa Ocupada
                </div>
              </div>
            </div>
            <div></div>
            <p>Presione la mesa deseada para ver sus pedidos</p>
        </div>

    </div>
@endsection
