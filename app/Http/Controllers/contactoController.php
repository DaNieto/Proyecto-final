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
    	$usuarios=DB::table('usuarios')
    	->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
    	->where('id_usuario',"=",$user)
    	->select('usuarios.*','tipousuarios.nombre AS tiponombre')
    	->first();
    	return view('consultaperfil',compact('usuarios'));
    }
    public function edita(){
    	$user=Auth::id();
    	$usuarios=DB::table('usuarios')
    	->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
    	->where('id_usuario',"=",$user)
    	->select('usuarios.*','tipousuarios.nombre AS tiponombre')
    	->first();
    	return view('editaperfil',compact('usuarios'));
    }
    public function actualiza(Request $datos){
    	$user=Auth::id();
    	DB::table('usuarios')
    	->where('id_usuario','=',$user)
    	->update(['direccion'=>$datos->direccion,'cp'=>$datos->cp,'telefono'=>$datos->telefono,'id_tarjeta'=>$datos->id_tarjeta]);

    	$usuarios=DB::table('usuarios')
    	->join('tipousuarios','usuarios.tipo','=','tipousuarios.id_tipo')
    	->where('id_usuario',"=",$user)
    	->select('usuarios.*','tipousuarios.nombre AS tiponombre')
    	->first();
    	return view('consultaperfil',compact('usuarios'));
    }
}
