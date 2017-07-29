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

Route::get('/new', function(){
    if(Auth::guest()){
        return Redirect::to('/');
    }else{
        //cambiar caja de ahorro por rol de administrador
        if(Auth::check())
            {   
                
                return redirect()->action('juegosController@registrar');
            }
          return Redirect::to('/')->with('danger','No puedes acceder a esa seccion');
        }
        return Redirect::to('/')->with('danger','No puedes acceder a esa seccion');
});
Route::get('/newadmn', function(){
    if(Auth::guest()){
        return Redirect::to('/');
    }else{
        //cambiar caja de ahorro por rol de administrador
        if(Auth::check())
            {   
                
                return redirect()->action('adminController@registra');
            }
          return Redirect::to('/')->with('danger','No puedes acceder a esa seccion');
        }
        return Redirect::to('/')->with('danger','No puedes acceder a esa seccion');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/7d0ee77799c90312f8b13a1a0e381','adminController@registra')->middleware('auth');
Route::get('/7d0ee77799c90312f8b13a1a0e38163e','juegosController@registrar')->middleware('auth');
Route::post('/guardaradmin', 'adminController@agrega')->middleware('auth');
Route::post('/guardaJuego','juegosController@guardar')->name('guardar')->middleware('auth');
Route::get('/consultaJuego/{id}', 'juegosController@consultaJuego')->middleware('auth');
Route::get('/consultaCatalogo/{categoria}','juegosController@consultaCatalogo');

Route::get('/details/{id}', 'juegosController@consultaJuego');


Route::get('/carrito/{id}', 'carritoController@consultar')->middleware('auth');
Route::get('/eliminacarrito/{id}', 'carritoController@eliminar');
Route::get('/agregacarrito/{id} ', 'carritoController@añadir')->middleware('auth');

Route::get('/contacto', 'contactoController@index');

Route::get('/editaperfil', 'contactoController@edita');
Route::get('/consultap','contactoController@consulta');
Route::post('/guardaperfil', 'contactoController@actualiza');

Route::get('/desccoins','jackpotController@pagocoins')->middleware('auth');
Route::get('/jackpot', 'jackpotController@index')->middleware('auth');
Route::get('/regdiscount/{id}','jackpotController@addreg');

Route::get('/details/{id}', 'juegosController@consultaJuego');

Route::get('/muestradesc','carritoController@muestradesc');
Route::post('/agregadesc','carritoController@agregadesc');
Route::get('/sindesc','carritoController@sindesc');
Route::get('/agregadetalle','carritoController@agregadetalle');
Route::get('/estructura/{fecha}','carritoController@ticket');
Route::get('/ticketpdf/{detalle}&&{id_venta}', 'carritoController@pdf');
