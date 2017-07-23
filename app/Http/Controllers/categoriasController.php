<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoriasController extends Controller
{
    //
     public function index()
    {
        return view('categoriaXbox');

    }
     public function index1()
     {
     	return view('categoriaPs4');
     }
     public function index2()
     {
     	return view('categoriaPc');
     }
      public function index3()
     {
     	return view('categoriaWiiu');
     }
}
