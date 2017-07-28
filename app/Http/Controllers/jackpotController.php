<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ofertas_usuarios;
use App\ofertas;
use DB;

class jackpotController extends Controller
{
    public function index()
    {
        return view('jackpot');
    }
    public function pagocoins()
    {
      $user=Auth::id();
      $exist=DB::table('usuarios')
      ->where('id_usuario',"=",$user)
      ->select(DB::raw('count(id_usuario) AS count'))
      ->first();
      $exist=$exist->count;
      if($exist>=1){
        $coins=DB::table('usuarios')
        ->where('id_usuario',"=",$user)
        ->select("coins")
        ->first();
        $coins=$coins->coins;
        if($coins>=45){
          $coins=$coins-45;
          DB::table('usuarios')
          ->where('id_usuario','=',$user)
          ->update(['coins'=>$coins]);
          return redirect('/jackpot');
        }else{
            flash('No cuentas con las suficientes coins para poder jugar');
            return redirect('/');
          }
      }else{
          if(($exist==0 )||($exist==null)){
            flash('Tienes Primero que registrarte y editar tu perfil para poder comprar, gracias.');
            return redirect('/');
          }
        }
    }
    public function addreg($id){
      // $disc=$datos->discount;
      if($id != 'Lose'){
      	$user=Auth::id();
      	$desc=new ofertas_usuarios();
      	$desc->id_oferta=$id;
      	$desc->id_usuarios=$user;
      	$desc->save();
      	return redirect('/');

      }else{
      	return redirect('/');
      }
    }
}
