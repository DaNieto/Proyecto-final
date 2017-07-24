<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelocarrito;
use DB;

class carritoController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return view('carrito');
=======
    public function consultar($id)
    {
      $carrito=modelocarrito::on('other')
      ->where('carrito.id_usuario','=',$id)
      ->join('usuarios','carrito.id_usuario','=','usuarios.id_usuario')
      ->join('productos','carrito.id_producto','=','productos.id_producto')
      ->select('carrito.*','productos.nombre AS nombre','productos.precio AS precio')
      ->get();
      return view('carrito',compact ('carrito'));
      //aqui creo falta un where sobre el id_usuario
>>>>>>> baaf092217d856e0707a32f847405bb8b709873e
    }
   /// public function consultar()
   // {
    //  $carrito=DB::table('carrito')
    //  ->join('productos','carrito.id_producto','=','productos.id_producto')
    //  ->join('usuarios','carrito.id_usuario','=','usuarios.id_usuario')
    //  ->select('carrito.*','productos.nombre AS nombre','productos.precio AS precio')
      //aqui creo falta un where sobre el id_usuario
   // }

   // public function eliminar($id){
    //  $carrito=modelocarrito::find($id);
    //  $carrito->delete();
     // return redirect('carrito');
   // }

<<<<<<< HEAD
   // public function añadir(Request $datos){
    // $carrito=new modelocarrito();
    //  $carrito->id_producto=$datos->input('nombre');
    //  $carrito->precio=$datos->input('precio');
    //  $carrito->save();
    //  flash('Se añadió tu articulo.');
    //}
   
=======
    public function añadir(Request $datos){
      $carrito=new modelocarrito();
      $carrito->id_producto=$datos->input('nombre');
      $carrito->precio=$datos->input('precio');
      $carrito->save();
      flash('Se añadió tu articulo.');
    }

     public function index()
    {
        return view('carrito');
    }
>>>>>>> baaf092217d856e0707a32f847405bb8b709873e
}
