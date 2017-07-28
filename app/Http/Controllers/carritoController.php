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
      $total=DB::table('carrito')
      ->where('id_usuario','=',$id)
      ->select(DB::raw('sum(precio) AS totalventa'))
      ->first();
      $total=$total->totalventa;
      // dd($total);
      return view('carrito',compact ('carrito','total'));
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
      $user=Auth::id();
      $exist=DB::table('usuarios')
      ->where('id_usuario',"=",$user)
      ->select(DB::raw('count(id_usuario) AS cuenta'))
      ->first();
      // ->select('id_usuario')
      // ->first();
      // dd($exist);
      // $exist=$exist->id_usuario;
      // $exist=$exist->id_usuario;
      $exist=$exist->cuenta;
      // dd($exist);
      if($exist>=1){
          $productos=DB::table('productos')
          ->where('id_producto','=',$datos)
          ->select('*')
          ->first();
          
          $categoria=DB::table('productos')
          ->where('id_producto','=',$datos)
          ->select('id_categoria')
          ->first();
          
          $cat=$categoria->id_categoria;
          // dd($cat);
  
          $carrito= new modelocarrito();
          $carrito->id_usuario=$user;
          $carrito->id_producto=$productos->id_producto;
          $carrito->precio=$productos->precio;
          $carrito->save();
          flash('Se añadió tu articulo.')->success();
          // return redirect('/consultarAlumnos');
          // dd($carrito);
          // return red9rect('url{{/carrito}}/{{}}');
          //dd($cat);
          return redirect()->action('juegosController@consultaCatalogo',['categoria'=>$cat]);
        }else{
          if(($exist==0 )||($exist==null)){
            flash('¡Recuerde que necesita registrar sus datos!')->success();

            return redirect('/');
          }
        }
    }
    public function agregadesc()
      {   $usuario=Auth::user()->id;
          // dd($usuario);
          $existdesc=DB::table('ofertas_usuarios')
          ->where('id_usuarios','=',$usuario)
          ->select(DB::raw('count(id_oferta) AS descuento'))
          ->first();
          $existdesc=$existdesc->descuento
          // dd($existdesc);
          if($existdesc>=1){
            $desc=DB::table('ofertas_usuarios')
            ->where('ofertas_usuarios.id_usuarios','=',$usuario)
            ->join('ofertas','ofertas.id_oferta','=','ofertas_usuarios.id_oferta')
            ->select('ofertas_usuarios.*','ofertas.nombre_oferta AS nombre_oferta')
            ->get();
            $carrito=DB::table('carrito')
            ->where('id_usuario','=',$usuario)
            ->join('productos','carrito.id_producto','=','productos.id_producto')
            ->Select('carrito.*','productos.nombre AS nombre')
            ->first();
             dd($desc);
            return view('detalle',compact('carrito','desc'));
          }else{
            if(($exist==0 )||($exist==null)){
              return view('/detalleSinDesc');
            }
          }
      }
      public function agregadetalle(){
        $usuario=Auth::id();
        $count=DB::table('carrito')
        ->wherte('id_usuario','=',$usuario)
        ->Select(DB::raw('cosunt(id_carrito)AS cuenta'))
        ->first();
        $count=$count->cuenta;
        while($count!=0){
          $carrito=DB::table('carrito')
            ->where('id_usuario','=',$usuario)
            ->select('*')
            ->first();
          $desc=DB::table('ofertas_usuarios')
            ->where('ofertas_usuarios.id_usuario','=',$usuario)
            ->join('ofertas','ofertas_usuarios.id_oferta','=','ofertas.id_oferta')
            ->seletc('*')
            ->first();
        }
      }
    public function index()
      {
        return view('detalle');
      }
 }
