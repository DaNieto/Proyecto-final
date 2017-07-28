<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelocarrito;
use App\detalleVenta;
use App\usuarios;
use App\productos;
use App\Venta;
use DB;

 class carritoController extends Controller
 {
    public function consultar($id)
     {

      $carrito=DB::table('carrito')
      ->where('carrito.id_usuario','=',$id)
      ->where('carrito.id_carrito','!=',0)
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
    public function muestradesc()
    {   
        $usuario=Auth::user()->id;
          $cero=0;
          // dd($usuario);
          $existecar=DB::table('carrito')
          ->where('id_usuario','=',$usuario)
          ->select(DB::raw('count(id_carrito) AS countcar'))
          ->first();
          $existecar=$existecar->countcar;
          // dd($existecar);

          if($existecar>=1){
            $existdesc=DB::table('ofertas_usuarios')
            ->where('id_usuarios','=',$usuario)
            ->select(DB::raw('count(id_oferta) AS descuento'))
            ->first();
            $existdesc=$existdesc->descuento;
             // dd($existdesc);
            if($existdesc>=1){
              $desc=DB::table('ofertas_usuarios')
              ->where('ofertas_usuarios.id_usuarios','=',$usuario)
              ->join('ofertas','ofertas.id_oferta','=','ofertas_usuarios.id_oferta')
              ->select('ofertas_usuarios.*','ofertas.nombre_oferta AS nombre_oferta')
              ->get();
              // dd($desc);
              $carrito=DB::table('carrito')
              ->where('id_usuario','=',$usuario)
              ->where('id_carrito','!=',$cero)
              ->join('productos','carrito.id_producto','=','productos.id_producto')
              ->Select('carrito.*','productos.nombre AS nombre')
              ->first();
               // dd($desc);
              return view('detalle',compact('carrito','desc'));
            }else{
              if(($existdesc==0 )||($existdesc==null)){
                return view('detalleSinDesc');
            }
          }
        }else{
              if(($existecar==0 )||($existecar==null)){
                return view('detalleSinDesc');
              }
            }
      }
      public function agregadesc(Request $datos){
          $datos=$datos->carrera;
          $desc=DB::table('ofertas_usuarios')
          ->where('ofertas_usuarios.id_oferta','=',$datos)
          ->join('ofertas','ofertas_usuarios.id_oferta','=','ofertas.id_oferta')
          ->select('ofertas_usuarios.*','ofertas.descuento AS descuento')
          ->first();
          $iddesc=$desc->id_oferta;
          $desc=$desc->descuento;
          // dd($desc);
          $usuario=Auth::id();
          $carrito=modelocarrito::all()
          ->where('id_usuario','=',$usuario)
          ->first();
          $precio=$carrito->precio;
          $precioxdesc=$precio*$desc;
          // dd($precioxdesc);
          $carrito=DB::table('carrito')
            ->where('id_usuario','=',$usuario)
            ->where('id_carrito','!=',0)
            ->join('productos','carrito.id_producto','=','productos.id_producto')
            ->Select('carrito.*','productos.nombre AS nombre')
            ->first();
          $sindesc=new detalleVenta();
          $sindesc->id_carrito=$carrito->id_carrito;
          $sindesc->id_producto=$carrito->id_producto;
          $sindesc->precioxdesc=$precioxdesc;
          $sindesc->save();

          $deldesc=DB::table('ofertas_usuarios')
          ->where('id_usuarios','=',$usuario)
          ->where('id_oferta','=',$iddesc)
          ->delete();

          $del=DB::table('carrito')
          ->where('id_carrito','=',$carrito->id_carrito)
          ->delete();
          return redirect()->action('carritoController@muestradesc');
          
      }
      public function sindesc(){
          $usuario=Auth::id();
          $carrito=modelocarrito::all()
          ->where('id_usuario','=',$usuario)
          ->first();
          // dd($carrito);
          $sindesc=new detalleVenta();
          $sindesc->id_carrito=$carrito->id_carrito;
          $sindesc->id_producto=$carrito->id_producto;
          $sindesc->id_usuario=$usuario;
          $sindesc->precioxdesc=$carrito->precio;
          $sindesc->save();
          // dd($sindesc);
          flash('¡Recuerde que necesita registrar sus datos!')->success();

          $delcar=DB::table('carrito')
          ->where('id_carrito','=',$carrito->id_carrito)
          ->delete();
          return redirect()->action('carritoController@muestradesc');
      }
      public function agregadetalle(){
        $user=Auth::id();
        $carrito=modelocarrito::all()
          ->where('id_usuario','=',$user)
          ->first();
          // dd($carrito);
          $sindesc=new detalleVenta();
          $sindesc->id_carrito=$carrito->id_carrito;
          $sindesc->id_producto=$carrito->id_producto;
          $sindesc->id_usuario=$user;
          $sindesc->precioxdesc=$carrito->precio;
          $sindesc->save();
        $count=DB::table('detalleventa')
        ->where('id_usuario','=',$user)
        ->Select(DB::raw('count(id_carrito)AS cuenta'))
        ->first();
        $count=$count->cuenta;
        if($count!=0){
          $total=DB::table('detalleventa')
            ->where('id_usuario','=',$user)
            ->select(DB::raw('sum(precioxdesc) AS total'))
            ->first();
          $fecha=DB::table('detalleventa')
          ->select(DB::raw('CURDATE() AS fecha'))
          ->first();
          $getcoins=DB::table('usuarios')
          ->where('id_usuario','=',$user)
          ->select('coins')
          ->first();
          $getcoins=$getcoins->coins;
          $getcoins=($getcoins)+($count*15);
          DB::table('usuarios')
            ->where('id_usuario','=',$user)
            ->update(['coins'=>$getcoins]);
          $fecha=$fecha->fecha;
          $venta=new Venta();
          $venta->id_usuario=$user;
          $venta->fecha=$fecha;
          $venta->totalcompra=$total->total;
          $venta->save();
          return redirect()->action('carritoController@ticket');
          // return redirect('/ticket',compact('total','usuario','detalle'));
        }
        else{
          return redirect('/');
        }
      }
    public function ticket()
      {
        $user=Auth::id();
        $detalle=DB::table('detalleventa')
          ->where('id_usuario','=',$user)
          ->join('productos','detalleventa.id_producto','=','productos.id_producto')
          ->join('categoria','productos.id_categoria','=','categoria.id_categoria')
          ->select('detalleventa.*','detalleVenta.created_at','productos.nombre AS producto','detalleventa.precioxdesc','categoria.nombre AS categoria')
          ->get();
       $fecha=DB::table('detalleventa')
          ->select(DB::raw('CURDATE() AS fecha'))
          ->first();
        $venta=DB::table('ventas')
        ->where('id_usuario','=',$user)
        ->where('fecha','=',$fecha->fecha)
        ->select('*')
        ->first();
        $usuario=usuarios::all()
          ->where('id_usuario','=',$user)
          ->first();
        return view('ticket',compact('usuario','detalle','venta'));
      }
      public function pdf(){
        $user=Auth::id();
        $detalle=DB::table('detalleventa')
          ->where('id_usuario','=',$user)
          ->join('productos','detalleventa.id_producto','=','productos.id_producto')
          ->join('categoria','productos.id_categoria','=','categoria.id_categoria')
          ->select('detalleventa.*','detalleVenta.created_at','productos.nombre AS producto','detalleventa.precioxdesc','categoria.nombre AS categoria')
          ->get();
       $fecha=DB::table('detalleventa')
          ->select(DB::raw('CURDATE() AS fecha'))
          ->first();
        $venta=DB::table('ventas')
        ->where('id_usuario','=',$user)
        ->where('fecha','=',$fecha->fecha)
        ->select('*')
        ->first();
        $usuario=usuarios::all()
          ->where('id_usuario','=',$user)
          ->first();
      $vista=view('ticket', compact('detalle','venta','usuario'));
      $pdf=\App::make('dompdf.wrapper');
      $pdf->loadHTML($vista);
      return $pdf->stream('ticketCompraFinalboss.pdf');
   }
 }
