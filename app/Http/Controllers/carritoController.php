<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelocarrito;
use DB;

class carritoController extends Controller
{
    public function index()
    {
        return view('carrito');
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

   // public function añadir(Request $datos){
    // $carrito=new modelocarrito();
    //  $carrito->id_producto=$datos->input('nombre');
    //  $carrito->precio=$datos->input('precio');
    //  $carrito->save();
    //  flash('Se añadió tu articulo.');
    //}
   
}
