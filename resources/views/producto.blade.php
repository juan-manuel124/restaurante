@extends('plantilla')

@section('seccion')
    <br>
    <br>
    <h1>Productos</h1>
    <br>
    <br>
    <table class="table table-striped">
       
            <tr>
                <th scope="col"><h2>Nombre Producto</h2></th>
                <th scope="col"><h2>Cantidad</h2></th>
            </tr>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombreProducto}}</td>
                <td><input type="int" name="cantidad" placeholder="{{$producto->cantidadProducto}}"></td>
            </tr>
            @endforeach      
       
    </table>  
    <div class="container">
        <div class="coll" align="right">
        <button type="button" class="btn btn-secondary">Guardar</button> <a href="{{ route('crearproducto') }}" ><button type="button" class="btn btn-primary">Crear</button></a>
        </div>
        

    </div>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
@endsection
