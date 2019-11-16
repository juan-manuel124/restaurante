@extends('plantilla')

@section('seccion')
<br><br>
        <h1>Usuarios</h1>
        <br>
        <br>
        <br>
        <br>
        <div margin-left=30px>
        <!--<center>-->  
            <table class ="table table-striped">
                <thead >
                <tr>
                    <th scope="col"> <h4><strong>Nombre</strong></h4></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td><button type="button" class="btn btn-secondary">Modificar</button></td>
                    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <br>
            <br>
        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
       
@endsection
