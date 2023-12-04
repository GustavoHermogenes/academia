<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadesController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('site.modalidades.musculacao');
    }

    public function peso(){
        return view('site.modalidades.peso');
    }

    public function luta(){
        return view('site.modalidades.lutas');
    }

    public function meditacao(){
        return view('site.modalidades.meditacao');
    }

    public function natacao(){
        return view('site.modalidades.natacao');
    }

    public function aerobico(){
        return view('site.modalidades.aerobico');
    }
}
