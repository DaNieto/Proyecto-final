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
      ->select('id_usuario')
      ->first();
      $exist=$exist->id_usuario;
      if($exist>=1){
        $coins=DB::table('usuarios')
        ->where('id_usuario',"=",$user)
        ->select("coins")
        ->first();
      dd($coins);
        return redirect('/jackpot');
      }else{
          if(($exist==null )||($exist==0)){
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
