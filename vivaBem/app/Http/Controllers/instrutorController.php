<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instrutorController extends Controller
{
    public function index(){
        return view('site.dashboard.instrutor');
    }
}
