@extends('plantilla')
@section('seccion')
    <h1>modificar usuario</h1>
    <br>
    &nbsp;
    <br>
    &nbsp;
    <br>
    <form action="{{route('actualizarusuario',$usuario)}}" method="post">
                @csrf @method('PATCH')
                <table class="table table-striped">
                    <tr><h3>Solo puedes cambiar los nombres y los correos electronicos</h3></tr>
                    <tr>
                        <td><center><input type="varchar" name="name" class="form-control form-control-lg" value="{{$usuario->name}}"></center></td>
                    </tr>
                    <tr>
                        <td><center><input type="email" name="email" class="form-control form-control-lg" value="{{$usuario->email}}"></center></td>
                    </tr>
                    <tr>
                       <!--<td><center><input type="varchar" name="name" class="form-control form-control-lg" value="{{$usuario->password}}"></center></td>-->
                    </tr>
                </table>
                <div class="container">
                    <div class="col" align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button><a href="{{ route('usuarios') }}" ><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    
                </div>
            </form>
@endsection
