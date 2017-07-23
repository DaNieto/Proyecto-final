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

//Route::get('/proof', function () {
    //return view('jackpot');
    // echo "texto";
     Route::get('/jackpot', 'jackpotController@index');
//})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registraJuego', 'juegosController@registrar');
Route::post('/guardaJuego','juegosController@guardar');
Route::get('/consultaJuego/{id}', 'juegosController@consultaJuego');
Route::get('/consultaCatalogo/{categoria}','juegosController@consultaCatalogo');

//Route::get('/jackpot', 'jackpotController@index');

<<<<<<< HEAD
Route::get('/carrito/{id}', 'carritoController@consultar');
Route::get('/carrito', 'carritoController@eliminar');
Route::get('/carrito', 'carritoController@añadir');
=======
Route::get('/carrito', 'carritoController@index');

//categorias

Route::get('/categoriaXbox', 'categoriasController@index');

Route::get('/categoriaPs4', 'categoriasController@index1');
Route::get('/categoriaPc', 'categoriasController@index2');
Route::get('/categoriaWiiu', 'categoriasController@index3');


//vistas juegos PC
Route::get('/details', 'detailsController@index');
>>>>>>> b832b9824a7e68757c23e87b7ff3a591dd2fb18c
