@extends('plantilla')

@section('seccion')
    <br>
    <br>
    <h1>Productos</h1>
    <br>
    <br>
    <div class="m-3"><a href="{{ route('crearproducto') }}" ><button type="button" class="btn btn-primary">Ingresar Producto</button></a></div>
    <br>
    <br>
    <table class="table table-striped">
       
            <tr>
                <th scope="col"><h2><br>id</h2></th>
                <th scope="col"><h2>Nombre Producto</h2></th>
                <th scope="col"><h2><br>Cantidad &nbsp;</h2></th>
                <th scope="col"><h2>Precio de Costo</h2></th>
                <th scope="col"><h2>Precio de Venta</h2></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombreProducto}}</td>
                <td>{{$producto->cantidadProducto}}</td>
                <td>{{$producto->precioCosto}}</td>
                <td>{{$producto->precioVenta}}</td>
                <td><a href="{{route('modificarproducto',$producto)}}"><button type="button" class="btn btn-secondary">Modificar</button></a></td>
                <td><form action="{{route ('eliminarproducto',$producto)}}" method="post">
                        @csrf  @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button></td>
                    </form></td>
            </tr>
            @endforeach      
       
    </table>  
   
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
@endsection
