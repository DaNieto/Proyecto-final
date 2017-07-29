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
        $user=Auth::id();
        $exist=DB::table('usuarios')
        ->where('id_usuario',"=",$user)
        ->select(DB::raw('count(id_usuario) AS cuenta'))
        ->first();
        $exist=$exist->cuenta;
        $cero=0;
        if($exist>=1){
          // dd($usuario);
          $existecar=DB::table('carrito')
          ->where('id_usuario','=',$user)
          ->select(DB::raw('count(id_carrito) AS countcar'))
          ->first();
          $existecar=$existecar->countcar;
          // dd($existecar);

          if($existecar>=1){
            $existdesc=DB::table('ofertas_usuarios')
            ->where('id_usuarios','=',$user)
            ->select(DB::raw('count(id_oferta) AS descuento'))
            ->first();
            $existdesc=$existdesc->descuento;
             // dd($existdesc);
            if($existdesc>=1){
              $desc=DB::table('ofertas_usuarios')
              ->where('ofertas_usuarios.id_usuarios','=',$user)
              ->join('ofertas','ofertas.id_oferta','=','ofertas_usuarios.id_oferta')
              ->select('ofertas_usuarios.*','ofertas.nombre_oferta AS nombre_oferta')
              ->get();
              // dd($desc);
              $carrito=DB::table('carrito')
              ->where('id_usuario','=',$user)
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
        }else{if(($exist==0 )||($exist==null))
                return view('home');
        }
      }
      public function agregadesc(Request $datos){
          $user=Auth::id();
          $datos=$datos->carrera;
          $desc=DB::table('ofertas_usuarios')
          ->where('ofertas_usuarios.id_oferta','=',$datos)
          ->join('ofertas','ofertas_usuarios.id_oferta','=','ofertas.id_oferta')
          ->select('ofertas_usuarios.*','ofertas.descuento AS descuento')
          ->first();
          $iddesc=$desc->id_oferta;
          $desc=$desc->descuento;
          // dd($desc);
          $carrito=modelocarrito::all()
          ->where('id_usuario','=',$user)
          ->first();
          $precio=$carrito->precio;
          $precioxdesc=$precio*$desc;
          // dd($precioxdesc);
          $carrito=DB::table('carrito')
            ->where('id_usuario','=',$user)
            ->where('id_carrito','!=',0)
            ->join('productos','carrito.id_producto','=','productos.id_producto')
            ->Select('carrito.*','productos.nombre AS nombre')
            ->first();
          $sindesc=new detalleVenta();
          $sindesc->id_carrito=$carrito->id_carrito;
          $sindesc->id_producto=$carrito->id_producto;
          $sindesc->id_usuario=$user;
          $sindesc->precioxdesc=$precioxdesc;
          $sindesc->save();

          $deldesc=DB::table('ofertas_usuarios')
          ->where('id_usuarios','=',$user)
          ->where('id_oferta','=',$iddesc)
          ->delete();

          $del=DB::table('carrito')
          ->where('id_carrito','=',$carrito->id_carrito)
          ->delete();
          return redirect()->action('carritoController@muestradesc');
          
      }
      public function sindesc(){
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
          // dd($sindesc);
          flash('¡Recuerde que necesita registrar sus datos!')->success();

          $delcar=DB::table('carrito')
          ->where('id_carrito','=',$carrito->id_carrito)
          ->delete();
          return redirect()->action('carritoController@muestradesc');
      }
      public function agregadetalle(){
        $user=Auth::id();
        $existecar=DB::table('carrito')
          ->where('id_usuario','=',$user)
          ->select(DB::raw('count(id_carrito) AS countcar'))
          ->first();
          $existecar=$existecar->countcar;
        if($existecar>=1){
          $carrito=DB::table('carrito')
            ->where('id_usuario','=',$user)
            ->get();
          foreach ($carrito as $car) {
            $sindesc=new detalleVenta();
            $sindesc->id_carrito=$car->id_carrito;
            $sindesc->id_producto=$car->id_producto;
            $sindesc->id_usuario=$user;
            $sindesc->precioxdesc=$car->precio;
            $sindesc->save();

            $carrito=DB::table('carrito')
            ->where('id_carrito','=',$car->id_carrito)
            ->select('*')
            ->delete();
          }
            
        }
        $count=DB::table('detalleventa')
        ->where('id_usuario','=',$user)
        ->Select(DB::raw('count(id_carrito)AS cuenta'))
        ->first();
        // dd($count);
        $count=$count->cuenta;
        if($count>=1){
          $total=DB::table('detalleventa')
            ->where('id_usuario','=',$user)
            ->select(DB::raw('sum(precioxdesc) AS total'))
            ->first();
          $fecha=DB::table('detalleventa')
          ->select(DB::raw('NOW() AS fecha'))
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
          return redirect()->action('carritoController@ticket',['fecha'=>$fecha]);
          // return redirect('/ticket',compact('total','usuario','detalle'));
        }
        else{
          return redirect('/');
        }
      }
    public function ticket($fecha)
      {
        $user=Auth::id();
        $detalle=DB::table('detalleventa')
          ->where('id_usuario','=',$user)
          ->join('productos','detalleventa.id_producto','=','productos.id_producto')
          ->join('categoria','productos.id_categoria','=','categoria.id_categoria')
          ->select('detalleventa.*','detalleVenta.created_at','productos.nombre AS producto','detalleventa.precioxdesc','categoria.nombre AS categoria')
          ->get();
        // $fecha=DB::table('detalleventa')
        //   ->select(DB::raw('NOW() AS fecha'))
        //   ->first();
        $cantidad=DB::table('detalleventa')
        ->where('id_usuario','=',$user)
        ->select(DB::raw('count(id_producto) AS cantidad'))
        ->first();
        $cantidad=$cantidad->cantidad;
        $venta=DB::table('ventas')
          ->where('id_usuario','=',$user)
          ->where('fecha','=',$fecha)
          ->select('*')
          ->first();
        $usuario=usuarios::all()
          ->where('id_usuario','=',$user)
          ->first();
        $deldetalle=DB::table('detalleventa')
          ->where('id_usuario','=',$user)
          ->select('*')
          ->delete();
        return view('ticket',compact('usuario','detalle','venta','cantidad'));
      }
      public function pdf($cantidad,$id_venta){
        $user=Auth::id();
        $usuario=usuarios::all()
          ->where('id_usuario','=',$user)
          ->first();
        $venta=Venta::all()
        ->where('id_venta','=',$id_venta)
        ->first();
      $vista=view('ticketpdf',compact('cantidad','usuario','venta'));
      $pdf=\App::make('dompdf.wrapper');
      $pdf->loadHTML($vista);
      return $pdf->stream('ticketCompraFinalboss.pdf');
   }
 }
