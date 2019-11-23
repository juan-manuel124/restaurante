<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\pagesController;
use Illuminate\Auth\Events\Login;

Route::get('/', 'PagesController@login');//muestra el login

Route::get('pedido','PagesController@pedido')->name('pedidos');//muestra pedido

Route::get('facturacion','PagesController@facturacion')->name('facturacion');//muestra facturacion

Route::get('mesa','PagesController@mesa')->name('mesa');//muestra mesa

Route::get('inventario','PagesController@inventario')->name('inventario');//muestra uinventario

Route::get('cocina','PagesController@cocina')->name('cocina');//cocina





Route::get('producto','PagesController@producto')->name('producto');

Route::get('crearproducto','PagesController@crearproducto')->name('crearproducto');

Route::post('insertarproducto','PagesController@insertarproducto')->name('insertarproducto');

Route::get('modificarproducto/{producto}','PagesController@modificarproducto')->name('modificarproducto');

Route::patch('actualizarproducto/{producto}','PagesController@actualizarproducto')->name('actualizarproducto');

Route::delete('eliminarproducto/{producto}','PagesController@eliminarproducto')->name('eliminarproducto');




Route::get('compras','PagesController@compras')->name('compras');

Route::get('crearcompra','PagesController@crearcompra')->name('crearcompra');

Route::post('insertarcompra','PagesController@insertarcompra')->name('insertarcompra');

Route::get('modificarcompra/{compra}','PagesController@modificarcompra')->name('modificarcompra');

Route::patch('actualizarcompra/{compra}','PagesController@actualizarcompra')->name('actualizarcompra');

Route::delete('eliminarcompra/{compra}','PagesController@eliminarcompra')->name('eliminarcompra');




Route::get('mesa','PagesController@mesa')->name('mesa');

Route::get('inventario','PagesController@inventario')->name('inventario');

Route::get('cocina','PagesController@cocina')->name('cocina');





Route::get('usuarios','PagesController@usuarios')->name('usuarios');

Route::get('modificarusuario/{user}','PagesController@modificarusuario')->name('modificarusuario');

Route::patch('actualizarusuario/{usuario}','PagesController@actualizarusuario')->name('actualizarusuario');

Route::delete('eliminarusuario/{user}','PagesController@eliminarusuario')->name('eliminarusuario');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
