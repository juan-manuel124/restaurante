@extends('plantilla')

@section('seccion')
<br><br>
        <h1>Compras</h1>
        
        <div class="m-3"><a href="{{ route('inser') }}" ><button type="button" class="btn btn-primary">Ingresar Compra</button></a></div>
        
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
                    <th scope="col"><h2>precio unidad</h2></th>
                    <th scope="col"><h2>subtotal</h2></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                <tr>
                    <td>{{$compra->id}}</td>
                    <td>{{$compra->nombreProducto}}</td>
                    <td>{{$compra->cantidadProducto}}</td>
                    <td>{{$compra->precio}}</td>
                    <td>cantidad*precio</td>
                    <td><button type="button" class="btn btn-secondary">Modificar</button></td>
                    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                </tr>
                @endforeach()
                </tbody>
            </table>

            <br>
            <br>
        </div>
        <!--</center>-->

        
        
@endsection
