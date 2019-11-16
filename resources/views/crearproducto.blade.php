@extends('plantilla')

@section('seccion')
    <br>
    <br>
    <br>
    <h1>Crear Producto</h1>
    <br>
    <br>
    <form action="{{route('prodint')}}" method="post">
    @csrf
    <table class="table table-striped">
        <tr>
            <td><center><input type="varchar" name="nombreProducto" value="nombre del Producto"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="cantidadProducto" value="cantidad del Producto"></center></td>
        </tr>
        <tr>
            <td><center><input type="double" name="precio" value="precio"></center></td>
        </tr>
    </table>
	<center><button type="submit" class="btn btn-primary">Guardar</button><a href="{{ route('producto') }}" ><button type="button" class="btn btn-danger">volver</button></a></center>
    </form>
@endsection