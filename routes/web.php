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
/*
Route::get('/', 'PagesController@login');*/

Route::get('/', function () {
    return view('login');
});

Route::get('pedido','PagesController@pedido')->name('ped');

Route::get('facturacion','PagesController@facturacion')->name('fac');

Route::post('aderircompra','PagesController@aderircompra')->name('compint');

Route::post('aderirproducto','PagesController@aderirproducto')->name('prodint');

Route::get('mesa','PagesController@mesa')->name('mesa');

Route::get('inventario','PagesController@inventario')->name('inventario');

Route::get('cocina','PagesController@cocina')->name('coc');

Route::get('compras','PagesController@compras')->name('comp');

Route::get('insertarcompra','PagesController@insertarcompra')->name('inser');

Route::get('usuarios','PagesController@usuarios')->name('usu');

Route::get('producto','PagesController@producto')->name('producto');

Route::get('crearproducto','PagesController@crearproducto')->name('crearproducto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
