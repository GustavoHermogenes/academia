<?php

namespace App\Http\Controllers;

use App\Models\tblaluno;
use App\Models\tblalunos;
use App\Models\tblfuncionarios;
use App\Models\tblusuario;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('site.login');
    }

    public function autenticar(Request $request){

        $regras = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $msg = [
            'email.required' => 'O campo de e-mail é obrigatório',
            'email.email'    => 'O e-mail informado não é email',
            'password.required' => 'O campo de senha é obrigatório'
        ];

        $request->validate($regras, $msg);

        $email = $request->get('email');
        $senha = $request->get('password');

        // echo "E-mail: $email | Senha: $senha ";
        // echo "<br>";

        $usuario = tblusuario::where('emailUsuario', $email)->first();

        if(!$usuario){
            return back()->withErrors(['email' => 'O e-mail informado não está cadastrado!']);
        }

        if ($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        }


        // dd($usuario);

        $tipoUsuario = $usuario->tipo_usuario;

        // dd($tipoUsuario);

        if($tipoUsuario instanceof tblalunos){

            dd($tipoUsuario);

        }elseif($tipoUsuario instanceof tblfuncionarios){

            dd($tipoUsuario);

        }

    }
}
