<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorias;
use App\Productos;
use DB;

class juegosController extends Controller
{
    public function registrar()
    {   
        $user=Auth::id();
        $tipo=DB::table('usuarios')
        ->where('id_usuario','=',$user)
        ->select('tipo')
        ->first();
        $tipo=$tipo->tipo;
        if($tipo==1){
        	$categorias=Categorias::all();
            return view('registroJuego', compact('categorias'));
        }else{
            return view('home');
        }

    }
    public function guardar(Request $juego)
    {
    	$producto= new Productos();
    	$producto->nombre=$juego->input('nombre');
    	$producto->descripcion=$juego->input('descripcion');
    	$producto->precio=$juego->input('precio');
    	$producto->id_categoria=$juego->input('categoria');
    	$producto->save();
    	return redirect('/home');
    }
    public function consultaJuego($id) //por juego individual dentro del catalogo
    {
        // $juego=Productos::all();
        $juego=DB::table('productos')//->find(1);
            ->join('categoria','productos.id_categoria','=','categoria.id_categoria')
            ->where('id_producto','=',$id)
            ->select('productos.*','categoria.nombre AS categoria')
            ->first();
        // dd($juego);
         return view('details', compact('juego','id'));
    }
    public function consultaCatalogo($categoria)
    {
    	$catalogo=DB::table('productos')
    		->where('productos.id_categoria','=',$categoria)
    		->join('categoria','productos.id_categoria','=','categoria.id_categoria')
    		->select('productos.*','categoria.id_categoria')
    		->paginate(3);
            
    	return view('categoriaView',compact('catalogo','categoria'));
    }
}
