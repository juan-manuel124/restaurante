@extends('plantilla')

@section('seccion')

        <h1>Ingresar Compra</h1>
     
         
       <!-- <table class="table table-striped">
                
                <tr>
                    <th scope="col"><h2>Producto</h2></th>
                    <th scope="col"><h2>Cantidad</h2></th>
                    <th scope="col"><h2>Precio Unidad</h2></th>
                    <th scope="col"><h2>Subtotal</h2></th>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="int" name="cantidad"></td>
                    <td><input type="int" name="precio"></td>
                    <td><input type="varchar" name="subtotal" value="cantidad * precio"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-secondary">Aderir Producto</button></td>
                </tr>
            </table>-->
            <form action="{{route('compint')}}" method="post">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <td><center><input type="varchar" name="nombreProducto" value="Nombre Producto"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="cantidadProducto" value="Cantidad"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="double" name="precio" value="Precio"></center></td>
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="{{ route('comp') }}" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
@endsection
