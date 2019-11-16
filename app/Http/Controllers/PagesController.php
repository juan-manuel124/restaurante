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
    public function compras (){
        $compras=App\Compra::all();
        return view('compras',compact('compras'));
    }
    public function insertarcompra (){
        return view('insertarcompra');
    }
    public function usuarios (){
        $usuarios=App\User::all();
        return view('usuarios',compact('usuarios'));
    }
    public function producto (){
        $productos=App\Producto::all();
        return view('producto', compact('productos'));
    }
    public function crearproducto (){
        return view('crearproducto');
    }
    public function aderircompra (Request $request){
       // return $request->all();
       $compranueva = new App\Compra;
       $compranueva->nombreProducto = $request->nombreProducto;
       $compranueva->cantidadProducto = $request->cantidadProducto;
       $compranueva->precio = $request->precio;
       $compranueva->save();
       $compras=App\Compra::all();
    return view('compras',compact('compras'));
    }
    public function aderirproducto (Request $request){
        // return $request->all();
        $productonuevo = new App\Producto;
        $productonuevo->nombreProducto = $request->nombreProducto;
        $productonuevo->cantidadProducto = $request->cantidadProducto;
        $productonuevo->precio = $request->precio;
        $productonuevo->save();
        $productos=App\Producto::all();
     return view('producto',compact('productos'));
     }
}

