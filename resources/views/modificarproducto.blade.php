@extends('plantilla')

@section('seccion')
    
    <br>
    <br>
    <br>
    <h1>Modificar Producto</h1>
    <br>
    <br>
    <form action="{{route('actualizarproducto', $producto)}}" method="post">
    @csrf @method('PATCH')
    <table class="table table-striped">
        <tr>
            <td><center><input type="varchar" name="nombreProducto" placeholder="Nombre del Producto" value="{{$producto->nombreProducto}}"  class="form-control form-control-lg"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="precioVenta" placeholder="Precio de Venta" value="{{$producto->precioVenta}}" class="form-control form-control-lg"></center></td>
        </tr>
    </table>
    <center><button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('producto') }}" ><button type="button" class="btn btn-danger">volver</button></a></center>
    </form>
@endsection