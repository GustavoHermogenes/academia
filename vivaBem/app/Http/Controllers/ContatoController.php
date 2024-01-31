<?php

namespace App\Http\Controllers;

use App\Models\ContatoSalvar;  // Adicione essa linha
use App\Mail\ContatoEmail;
use App\Mail\salvarEmail;
use App\Models\Contato;
use App\Models\salvar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request)
    {

        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [
            'nomeContato'       => 'required|max:100',
            'emailContato'      => 'required|email|max:100',
            'foneContato'       => 'required|max:15',  // Removendo a restrição 'max'
            'assuntoContato'    => 'required|max:100',
            'mensContato'       => 'required',
        ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);
        } else {
            $contato = Contato::create($validarDados->validated());
            //Por email
            Mail::to('cybercompany@smpsistema.com.br')->send(new ContatoEmail($contato));

            return response()->json(['success' => 'Email registrado com sucesso']);
        }
    }


    //---------------------------------------------------------------
    //----------------------SALVAR EMAIL-----------------------------
    //---------------------------------------------------------------

    public function salvarEmail(Request $request)
    {

        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [
            'salvarEmail' => 'required|email|max:100',
        ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);
        }
        else{

            $verificarEmail = salvar::where('salvarEmail', $dados['salvarEmail'])->exists();

            if($verificarEmail){
                return response()->json(['errors' => ['salvarEmail' => 'Este e-mail já foi registrado.']], 422);
            }


            salvar::create($validarDados->validated());

            return response()->json(['success' => 'E-mail enviado com sucesso']);
        }


    }
}
