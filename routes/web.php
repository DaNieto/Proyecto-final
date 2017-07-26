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

Route::get('/agregaJuego', function(){
    if(Auth::guest()){
        return Redirect::route('home');
    }else{
        //cambiar caja de ahorro por rol de administrador
        if(Auth::user()->name == 'luis')
            {
                return Redirect::to('/registraJuego');
            }else{

            }
            if(Auth::user()->name != 'luis'){
                return Redirect::to('/')->with('danger','No puedes acceder a esa seccion');

            }
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registraJuego', 'juegosController@registrar')->middleware('auth');
Route::post('/guardaJuego','juegosController@guardar')->name('guardar')->middleware('auth');
Route::get('/consultaJuego/{id}', 'juegosController@consultaJuego')->middleware('auth');
Route::get('/consultaCatalogo/{categoria}','juegosController@consultaCatalogo');

Route::get('/jackpot', 'jackpotController@index');

 //vistas juegos PC
Route::get('/details/{id}', 'juegosController@consultaJuego');


Route::get('/carrito/{id}', 'carritoController@consultar');
Route::get('/eliminacarrito/{id}', 'carritoController@eliminar');
Route::get('/agregacarrito/{id}', 'carritoController@añadir');
