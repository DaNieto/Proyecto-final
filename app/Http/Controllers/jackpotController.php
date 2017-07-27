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
