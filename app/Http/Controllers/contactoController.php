<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\usuarios;
use DB;


class contactoController extends Controller
{
     public function index()
    {
        return view('contacto');

    }
     public function index1()
    {
        return view('perfil');

    }
    public function consulta()
    {
    	$user=Auth::id();
        $count=DB::table('usuarios')
        ->where('id_usuario','=',$user)
        ->select(DB::raw('count(direccion) AS countuser'))
        ->first();
          $count=$count->countuser;
        if($count!=0){
        	$usuarios=DB::table('usuarios')
        	->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
        	->where('id_usuario',"=",$user)
        	->select('usuarios.*','tipousuarios.nombre AS tiponombre')
        	->first();
        	return view('consultaperfil',compact('usuarios'));
        }else{
            return redirect('/editaperfil');
        }
    }
    public function edita(){
    	return view('editaperfil');
    }
    public function actualiza(Request $datos){
    	$user=Auth::id();
        $count=DB::table('usuarios')
        ->where('id_usuario','=',$user)
        ->select(DB::raw('count(direccion) AS countuser'))
        ->first();
        $count=$count->countuser;
        if($count>=1){
        	DB::table('usuarios')
        	->where('id_usuario','=',$user)
        	->update(['direccion'=>$datos->direccion,'cp'=>$datos->cp,'telefono'=>$datos->telefono,'id_tarjeta'=>$datos->id_tarjeta]);
            $usuarios=DB::table('usuarios')
            ->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
            ->where('id_usuario',"=",$user)
            ->select('usuarios.*','tipousuarios.nombre AS tiponombre')
            ->first();
            return view('consultaperfil',compact('usuarios'));
        }else{
            if($count==0){
              $sindesc=new usuarios();
              $sindesc->id_usuario=$user;
              $sindesc->tipo=2;
              $sindesc->direccion=$datos->direccion;
              $sindesc->cp=$datos->cp;
              $sindesc->telefono=$datos->telefono;
              $sindesc->id_tarjeta=$datos->id_tarjeta;
              $sindesc->pass_tarjeta="querty";
              $sindesc->coins=0;
              $sindesc->save();
                $usuarios=DB::table('usuarios')
                ->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
                ->where('id_usuario',"=",$user)
                ->select('usuarios.*','tipousuarios.nombre AS tiponombre')
                ->first();
                return view('consultaperfil',compact('usuarios'));
            }
        }
        
    }
}
