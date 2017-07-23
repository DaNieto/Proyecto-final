<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorias;
use App\Productos;
use DB;

class juegosController extends Controller
{
    public function registrar()
    {
    	$categorias=Categorias::all();
        return view('registroJuego', compact('categorias'));
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
    	$juego=Productos::on('other')//->find(1);
    		->where('id_producto','=',$id)
    		->select('nombre','precio','descripcion')
    		->first();
    	// dd($image);
    	 return view('consultaJuego', compact('juego'));
    }
    public function consultaCatalogo($categoria)
    {
    	$catalogo=Productos::on('other')
    		->where('productos.id_producto','=',$categoria)
    		->join('categoria','productos.id_producto','=','categoria.id_categoria')
    		->select('productos.*','categoria.id_categoria')
    		->paginate(8);
    	$plataforma=Categorias::on('other')
    		->where('id_categoria','=',$categoria)
    		->Select('nombre','descripcion')
    		->first();

    	return view('consultaCatalogo',compact('catalogo','plataforma'));
    }
}
