@extends('plantilla')

@section('seccion')

        <h1>Ingresar Compra</h1>
     
         
       
            <form action="{{route('insertarcompra')}}" method="post">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td><center><select name="nombreProducto" class="form-control form-control-lg" >
                            
                            @foreach($productos as $producto)
                                <option>{{$producto->nombreProducto}}</option>
                            @endforeach

                        </select></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="cantidadProducto" placeholder="Cantidad"  class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="varchar" name="fecha" placeholder="fecha  ejm:2008-08-23" class="form-control form-control-lg"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="precio" placeholder="Precio" class="form-control form-control-lg"></center></td>
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="{{ route('compras') }}" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
        
        
@endsection
