<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailsController extends Controller
{
    //vistas juegos PC
     public function index()
    {
        return view('details');
    }
    
    

}
