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

Route::get('/', function () {
    return view('home');
});

Route::get('/proof', function () {
    return view('jackpot');
    // echo "texto";
    // Route::get('/jackpot', 'jackpotController@index');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registraJuego', 'juegosController@registrar');
Route::post('/guardaJuego','juegosController@guardar');
Route::get('/consultaJuego/{id}', 'juegosController@consultaJuego');
Route::get('/consultaCatalogo/{categoria}','juegosController@consultaCatalogo');

//Route::get('/jackpot', 'jackpotController@index');

Route::get('/carrito/{id}', 'carritoController@consultar');
Route::get('/carrito', 'carritoController@eliminar');
Route::get('/carrito', 'carritoController@añadir');
