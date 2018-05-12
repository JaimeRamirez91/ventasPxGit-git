
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
/*
Route::get('/', function () {
    return view('ventas.ventas');
});*/
Route::view('/', 'ventas.ventas');
Route::get('/',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@listaVentas']);
Route::post('/',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@registroVentas']);
