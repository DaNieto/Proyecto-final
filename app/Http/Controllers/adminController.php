<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorias;
use App\Productos;
use App\usuarios;
use DB;

class adminController extends Controller
{
    public function registra()
    {   
        $user=Auth::id();
        $tipo=DB::table('usuarios')
        ->where('id_usuario','=',$user)
        ->select('tipo')
        ->first();
        $tipo=$tipo->tipo;
        if($tipo==1){
            return view('perfiladmn');
        }else{

            return view('home');
        }

    }
    public function agrega(Request $datos){
        $sindesc=new usuarios();
        $sindesc->id_usuario=$datos->id_usuario;
        $sindesc->tipo=1;
        $sindesc->direccion=$datos->direccion;
        $sindesc->cp=$datos->cp;
        $sindesc->telefono=$datos->telefono;
        $sindesc->id_tarjeta=$datos->id_tarjeta;
        $sindesc->pass_tarjeta="querty";
        $sindesc->coins=0;
        $sindesc->save();
            $usuarios=DB::table('usuarios')
            ->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
            ->where('id_usuario',"=",$datos->id_usuario)
            ->select('usuarios.*','tipousuarios.nombre AS tiponombre')
            ->first();
            return view('consultaadmin',compact('usuarios')); 
    }
}
