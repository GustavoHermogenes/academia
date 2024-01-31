<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){
        return view('site.dasboard.usuario');
    }
}
