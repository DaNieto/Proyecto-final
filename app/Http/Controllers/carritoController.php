<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelocarrito;
use DB;

 class carritoController extends Controller
 {
    public function consultar($id)
     {

      $carrito=DB::table('carrito')
      ->where('carrito.id_usuario','=',$id)
       ->join('usuarios','carrito.id_usuario','=','usuarios.id_usuario')
      ->join('productos','carrito.id_producto','=','productos.id_producto')
       ->select('carrito.*','productos.nombre AS nombre','productos.precio AS precio')
      ->get();
      return view('carrito',compact ('carrito'));
       //aqui creo falta un where sobre el id_usuario
     }

    public function eliminar($id){
      $carrito=DB::table('carrito')
      ->where('id_carrito','=',$id)
      ->select('*')
      ->delete();
      
      $user=Auth::user();
      $cat=$user->id;

      return redirect()->action('carritoController@consultar',['id'=>$cat]);
    }

    public function añadir($datos){
      $productos=DB::table('productos')
      ->where('id_producto','=',$datos)
      ->select('*')
      ->first();
      
      $categoria=DB::table('productos')
      ->where('id_producto','=',$datos)
      ->select('id_categoria')
      ->first();
      
      $cat=$categoria->id_categoria;
      $user=Auth::user();
      // dd($productos);
      // $carrito=DB::table('carrito')
      $carrito= new modelocarrito();
      $carrito->id_usuario=$user->id;
      $carrito->id_producto=$productos->id_producto;
      $carrito->precio=$productos->precio;
      $carrito->save();
      flash('Se añadió tu articulo.')->success();
      // return redirect('/consultarAlumnos');
      // dd($carrito);
      // return red9rect('url{{/carrito}}/{{}}');
      //dd($cat);
      return redirect()->action('juegosController@consultaCatalogo',['categoria'=>$cat]);
     }

      public function index()
     {
        return view('carrito');
     }
 }
