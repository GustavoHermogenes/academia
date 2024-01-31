<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblfuncionarios extends Model
{
    protected $fillable = [
        'nomeFuncionario',
        'dataNascFuncionario',
        'foneFuncionario',
        'enderecoFuncionario',
        'cidadeFuncionario',
        'estadoFuncionario',
        'cepFuncionario',
        'dataContrataçãoFuncionario',
        'cargoFuncionario',
        'salarioFuncionario',
        'tipoFuncionario',
        'statusFuncionario',
        'statusAluno'];

    public function usuario(){
        return $this->morphOne(tblusuario::class, 'tipo_usuario');
    }

}
