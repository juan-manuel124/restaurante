<meta name="csrf-token" content="{{ csrf_token() }}" />
<style type="text/css">
	.card-body{
		padding: 10px !important
	}
	.producLis .card-body{
		min-height: 70px;
		cursor: pointer;
	}
	.fa.fa-trash{
		cursor: pointer;
	}
  .opacity{
    opacity: 0.2;
  }
  .AjustarCantidad{
    cursor: pointer;
  }
</style>
@extends('layout')

@section('title','Mesa')

@section('content')
    <!-- Page Heading -->

    <div id="loadingBar" class="text-center">
      <div class="spinner-grow text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
          <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="opacity"  id="opacityContent">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 codeMesa="{{$mesa->id}}" class="codeMesa h3 mb-0 text-gray-800">Mesa {{$mesa->id}} </h1>
        <a href="/mesa/" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Volver</span>
          </a>
       
          @if($mesa->estado == 1)
             <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm text-white">
              <i class="fas fa fa-exclamation-circle fa-sm text-white-50"></i> 
              Ocupada              
            </a>
          @else
               <a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm text-white">
                <i class="fas fa fa-exclamation-circle fa-sm text-white-50"></i> 
                Disponible                
              </a>
          @endif
        
    </div>

    @include('partials/informe-ventas')

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-8 mb-4" style="border-right: 1px solid;">
          <h2>Productos Agregados</h2>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-12 mb-6">
                  <div class="card-header py-3 row">
                    <div class="m-0 font-weight-bold text-primary col-lg-4">Producto</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">Cantidad</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">Ajustar</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">Quitar</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">Unitario</div>
                  </div>
              </div>
            </div>
             <div class="col-lg-12" id="listaProductosAgregados">
             </div>
             <div class="col-lg-12 alert alert-warning sinProductosAgregados" style="display: none">
               No hay productos agregados a la mesa
             </div>
            <hr>
           <div class="col-lg-12 mb-6">
                <div class="card-header py-3 row">
                    <div class="m-0 font-weight-bold text-primary col-lg-4">Subtotales</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">&nbsp;</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">&nbsp;</div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2" onclick="limpiarProductos()">
                      <i class="fa fa-trash"></i>Quitar Todo
                    </div>
                    <div class="m-0 font-weight-bold text-primary col-lg-2">$ <span class="subTotal">0</span></div>
                </div>
            </div>
            <div class="col-lg-12 mb-6">
                <div class="card-header py-3 row">
                  <div class="col-lg-6"> &nbsp; </div>
                  <div class="col-lg-2">&nbsp;</div>
                  <div class="col-lg-2">&nbsp;</div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" onclick="pagar()" data-target="#exampleModal">
                       <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Pagar</span>
                    </button>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- Content Column -->
        <div class="col-lg-4 mb-4">
            <h2>Agregar Productos</h2>
            <div class="row producLis">
              <!-- Project Card Example -->
              <!-- Color System -->
              <?php $count = 0;  ?>

                @forelse($productos as $prod)

                  <div class="col-lg-4 mb-3">
                    <div class="card bg-primary text-white shadow text-center productoParaAgregar" onclick="agregarProducto({{$prod}})">
                      <div class="card-body">
                       {{ $prod->descripcion}} 
                       <br>
                       ({{ $prod->cantidad }})
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-lg-12 alert alert-danger">
                    <i class="fas fa fa-exclamation-circle fa-sm text-white-50"></i>   
                    No hay productos creados                  
                  </div>
                @endforelse
                {{ $productos->links() }}         

            </div>

        </div>

    </div>
    </div>

    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Restaurante las 3 C</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="card shadow mb-12">
           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div id="enviandoAjaxPedidos">
              <div id="loadingBar2" class="text-center" style="display: none">
                <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-secondary" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-success" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-info" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
              </div>              
            </div>
            <div class="card-header py-3 paySuccessMessage" style="display: none">
              <p class="m-0 font-weight-bold text-success">Pago realizado.</p>
              <p class="m-0 font-weight-bold text-success">La mesa ahora está disponible.</p>
              <p class="m-0">Esta ventana se cerrará en 5 segundos.</p>
            </div>
            <div class="card-header py-3 payNoProductsMessage" style="display: none">
              <p class="alert alert-danger">
                No ha agregado productos al pedido.
              </p>
            </div>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Factura de venta N° 1369</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Cant.</th>
                      <th>Unit.</th>
                      <th>Subt.</th>                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Totales</th>
                      <th>&nbsp;</th>
                      <th>Iva  $<span class="factIva">0</span> </th>
                      <th>Total  $<span class="factTotal"> 0 </span></th>                      
                    </tr>
                  </tfoot>
                  <tbody id="factProductosList">
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary makePay">Realizar Pago</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

  var subTotal = 0;
  var arrayProductosAgregados = [];

  $(document).ready(function(){
    
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

      //verificacion de productos agregados anteriormente
      setTimeout(function(){ 
        $('#loadingBar').hide();
        $('#opacityContent').removeClass('opacity');

        if(arrayProductosAgregados.length == 0){
          $('.sinProductosAgregados').show();
        }

      }, 500);

  });

	$('.makePay').click(function(){
		debugger;
    if(arrayProductosAgregados.length > 0) {

      //envia por ajax los productos
      var parametros = {
        'idMesa' : $('.codeMesa').attr('codeMesa'),
        'productos' : arrayProductosAgregados
      }
   
      $.ajax({
        data: parametros,
        url: '/ajaxRequestPost',
        type: 'post',
        beforeSend: function(){
          $('#enviandoAjaxPedidos #loadingBar2').show();
        },
        success: function(response){
          $('.paySuccessMessage').show();
          setTimeout(function(){ 
            window.location.href='/';
          }, 5000);
        }
      })  		 
    }
	}); 

  function ajustarCantidad(prodId, sumar){
    var buscarProducto = arrayProductosAgregados.find(producto => producto.id === prodId);
    if(buscarProducto){

      //Si la cantidad es cero y le quitan otra
      if(sumar == 0 && buscarProducto.cantidadAgregada == 1){
        removerProducto(buscarProducto.id);
      }else{
        agregarProducto(buscarProducto, sumar);
      }
    }else{

      if(arrayProductosAgregados.length == 0){
        $('#listaProductosAgregados').empty();
        $('.sinProductosAgregados').show();
      }

    }
  }

  function removerProducto(prodId){
 
    var indice = arrayProductosAgregados.findIndex(producto => producto.id === prodId);
    arrayProductosAgregados.splice(indice, 1);

    pintarProductos();
  }

  function agregarProducto(prodParam, sumar = 1){

    if(!prodParam.cantidadAgregada){
      prodParam.cantidadAgregada = 1;
    }

    if(arrayProductosAgregados.length > 0){

      var productoAgregado = arrayProductosAgregados.find(producto => producto.id === prodParam.id);
      if(!productoAgregado){
        arrayProductosAgregados.push(prodParam);
      
      }else{

        for (var i = arrayProductosAgregados.length - 1; i >= 0; i--) {

           if( arrayProductosAgregados[i].id == prodParam.id ){

              if(sumar == 1){
                arrayProductosAgregados[i].cantidadAgregada = parseInt(arrayProductosAgregados[i].cantidadAgregada) + 1;
              }else{
                arrayProductosAgregados[i].cantidadAgregada = parseInt(arrayProductosAgregados[i].cantidadAgregada) - 1;
              }
           }
        }
      }

    }else{
       arrayProductosAgregados.push(prodParam);
    }

    pintarProductos();
  }

  function pintarProductos(){

    subTotal = 0;

    if(arrayProductosAgregados.length > 0){

      var container = $('<div ptt="aaa" />');
      $.each( arrayProductosAgregados, function( key, prod ) {        

        subTotal = subTotal + parseInt(prod.cantidadAgregada * prod.precioVenta)

        container.append('<div class="col-lg-12 mb-6"> ' +
                '<div class="card bg-primary text-white shadow">' +
                  '<div class="card-body row">' +
                    '<div class="col-lg-4">'+prod.descripcion+'</div>' +
                    '<div class="col-lg-2">'+prod.cantidadAgregada+'</div>' +
                    '<div class="col-lg-2 AjustarCantidad"> ' +
                      '<i class="fa fa-arrow-up" onclick="ajustarCantidad('+prod.id+', 1)"></i> '+
                      '<i class="fa fa-arrow-down" onclick="ajustarCantidad('+prod.id+', 0)"></i> '+ 
                    '</div>' +                  
                    '<div class="col-lg-2" onclick="removerProducto('+prod.id+')"> <i class="fa fa-trash"></i> </div>  ' +                
                    '<div class="col-lg-2"> '+prod.precioVenta+' </i> </div>' +
                  '</div>' +
                '</div>' +
              '</div>');

        $('#listaProductosAgregados').html(container);

      }); 

      $('.sinProductosAgregados').hide();

    }else{
      $('#listaProductosAgregados').empty();  
      $('.sinProductosAgregados').show();
    }
    
    $('.subTotal').html(subTotal);
  }
  
  function limpiarProductos(){

    arrayProductosAgregados = [];
    pintarProductos();
  }

  function pagar(){

    if(arrayProductosAgregados.length > 0) {
       $('.payNoProductsMessage').hide();
      setTimeout(function(){ 

        $('#factProductosList').empty();
        
        var tableHtml = '';
        $.each( arrayProductosAgregados, function( key, prod ) {
          
          //subTotal = subTotal + parseInt(prod.cantidadAgregada * prod.precioVenta)

          tableHtml += '<tr>'+
                            '<td>'+prod.descripcion+'</td>'+
                            '<td>'+prod.cantidadAgregada+'</td>'+
                            '<td>$'+prod.precioVenta+'</td>'+
                            '<td>$'+(prod.precioVenta * prod.cantidadAgregada)+'</td>'+
                          '</tr>';
       
        }); 


        $('#factProductosList').html(tableHtml);
        $('.factTotal').text(subTotal);

        var iva = subTotal * 19 / 100;

        $('.factIva').text(iva);

      }, 1000);

    }else{
      $('.payNoProductsMessage').show();
    }
  }

</script>
@endsection

