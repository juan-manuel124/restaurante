<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pagesController extends Controller
{
    public function login(){
        return view('login');
    }



    public function pedido(){
        return view('pedido');
    }



    public function facturacion (){
        return view('facturacion');
    }



    public function mesa (){
        return view('mesa');
    }



    public function inventario (){
        return view('inventario');
    }



    public function cocina (){
        return view('cocina');
    }



    public function usuarios (){
        $usuarios=App\User::all();
        return view('usuarios',compact('usuarios'));
    }
    public function modificarusuario ($user){
        $usuarios=App\User::all();
        foreach ($usuarios as $us) {
            if ($us->name == $user) {
                $usuario = $us;
            }
        }
        return view('modificarusuario',compact('usuario'));
    }
    
    public function actualizarusuario(App\User $usuario){   
            $usuario->update([
            'name'=>request('name'),
            'email'=>request('email'),
        ]);
       
        return redirect()->route('usuarios');
    
    }

    public function eliminarusuario($id) {
        App\User::destroy($id);
    }
    





    public function compras (){
        $compras=App\Compra::all();
        return view('compras',compact('compras'));
    }
    public function crearcompra (){
        $productos=App\Producto::all();
        return view('insertarcompra', compact('productos'));
    }
    public function insertarcompra (Request $request){
        // return $request->all();
        $compranueva = new App\Compra;
        $compranueva->nombreProducto = $request->nombreProducto;
        $compranueva->cantidadProducto = $request->cantidadProducto;
        $compranueva->fecha = $request->fecha;
        $compranueva->precio = $request->precio;
        $compranueva->save();
        $compras=App\Compra::all();
        $productos=App\Producto::all();
        foreach($productos as $producto){
            if ($producto->nombreProducto == $request->nombreProducto) {
                $producto->cantidadProducto = $producto->cantidadProducto + $request->cantidadProducto;
                $producto->precioCosto = $request->precio;
                $producto->update();
            }
        }
        return view('compras',compact('compras'));
     }


     public function modificarcompra (App\Compra $compra){
        $productos=App\Producto::all();
        return view('modificarcompra',compact('compra','productos'));
    }


    public function actualizarcompra(Request $request, $id){

        
        $datosCompra = request()->except(['_token', '_method']);
        App\Compra::where('id', $id)->update($datosCompra);
        $compras=App\Compra::all();
        $cant=0;
        foreach($compras as $c){
            if ($c->nombreProducto == $request->nombreProducto) {
                
                $cant = $cant + $c->cantidadProducto;
            }
        }
        $productos=App\Producto::all();
        foreach($productos as $producto){
            if ($producto->nombreProducto == $request->nombreProducto) {
                $producto->cantidadProducto = $cant;
                $producto->precioCosto = $request->precio;
                $producto->update();
            }
        }
        return redirect('compras');

       
    
    }


    public function eliminarcompra($id,App\Compra $compras){
        

        $compras=App\Compra::all();
        $cant=0;
        $nombre="";
        foreach ($compras as $com) {
            if ($id == $com->id) {
                $nombre =$com->nombreProducto;
                $cant = $com->cantidadProducto;
            }
        }
        App\Compra::destroy($id);
        $productos=App\Producto::all();
        foreach($productos as $producto){
            if ($producto->nombreProducto == $nombre) {
                $producto->cantidadProducto = $producto->cantidadProducto - $cant;
            }
            $producto->update();    
        }
        
        return redirect('compras');
           
          
    }






    public function producto (){
        $productos=App\Producto::all();
        return view('producto', compact('productos'));
    }

    public function crearproducto (){
        return view('crearproducto');
    }

    public function insertarproducto (Request $request){
        // return $request->all();
        
        // $productonuevo = new App\Producto;
        // $productonuevo->nombreProducto = $request->nombreProducto;
        // $productonuevo->precioVenta = $request->precio;
        // $productonuevo->save();

         
        $datosProducto = request()->except('_token');
        App\Producto::insert($datosProducto);
        return redirect('producto');

        // $productos=App\Producto::all();
     }
     
     public function modificarproducto (App\Producto $producto){
        return view('modificarproducto',compact('producto'));
    }

    public function actualizarproducto(Request $request, $id){

        $datosProducto = request()->except(['_token', '_method']);
        App\Producto::where('id', $id)->update($datosProducto);
        return redirect('producto');
        // $producto->update([
        //      'nombreProducto'=>request($request->nombreProducto),
        //      'precioVenta'=>request($request->precioVenta),
        //  ]);
        //  $producto->save;
        //  //return redirect()->route('compras');
        //  return $request;
        }

    public function eliminarproducto($id) {
        App\Producto::destroy($id);
        return redirect('producto');
    }
}

