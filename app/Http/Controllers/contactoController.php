<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
