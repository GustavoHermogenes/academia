<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblalunos extends Model
{
    protected $fillable = [
        'nomeAluno',
        'dataAluno',
        'foneAluno',
        'enderecoAluno',
        'cidadeAluno',
        'estadoAluno',
        'cepAluno',
        'dataInscricaoAluno',
        'alturaAluno',
        'pesoAluno',
        'objetivoAluno',
        'planoAluno',
        'statusAluno'];

    public function usuario(){
        return $this->morphOne(tblusuario::class, 'tipo_usuario');
    }
}
