@extends('plantilla')

@section('seccion')
<br><br>
        <h1>Compras</h1>
        
        <div class="m-3"><a href="{{ route('crearcompra') }}" ><button type="button" class="btn btn-primary">Ingresar Compra</button></a></div>
        
        <div margin-left=30px>
        <!--<center>-->  
            <table class ="table table-striped">
                <thead >
                <tr>
                    <!--<td><h2>Producto</h2></td>
                    <td><h2>Valor pagado</h2></td>
                    <td><h2>fecha</h2></td>
                    <td><h2></h2></td>
                    <td><h2></h2></td>-->
                    <th scope="col"><h2>Id</h2></th>
                    <th scope="col"><h2>Producto</h2></th>
                    <th scope="col"><h2>cantidad</h2></th>
                    <th scope="col"><h2>fecha</h2></th>
                    <th scope="col"><h2>precio unidad</h2></th>
                    <th scope="col"><h2>subtotal</h2></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                <?php 
                $cons = $compra->cantidadProducto * $compra->precio;
                //$compr = $compra->nombreProducto;
                ?>
                
                <tr>
                    <td>{{$compra->id}}</td>
                    <td>{{$compra->nombreProducto}}</td>
                    <td>{{$compra->cantidadProducto}}</td>
                    <td>{{$compra->fecha}}</td>
                    <td>{{$compra->precio}}</td>
                    <td>{{$cons}}</td>
                    <td><a href="{{route('modificarcompra',$compra)}}"><button type="button" class="btn btn-secondary">Modificar</button></a></td>
                    <td><form action="{{route ('eliminarcompra',$compra)}}" method="post">
                        @csrf  @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button></td>
                    </form></td>
                </tr>
                @endforeach()
                </tbody>
            </table>

            <br>
            <br>
        </div>
        <!--</center>-->

        
        
@endsection
