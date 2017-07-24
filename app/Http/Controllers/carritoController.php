<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelocarrito;
use DB;

class carritoController extends Controller
{
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
    }

    public function eliminar($id){
      $carrito=modelocarrito::find($id);
      $carrito->delete();
      return redirect('carrito');
    }

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
}
