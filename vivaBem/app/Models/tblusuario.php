<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblusuario extends Model
{
    protected $table = 'tblusuario';

    protected $fillable = [
        'nomeUsuario',
        'emailUsuario',
        'senhaUsuario',
        'tipoUsuarioId',
        'tipoUsuarioType',
        'emailVerificado',
        'tokenLembrete'];

    public function tipo_usuario(){
        return $this->morphTo( 'tipo_usuario', 'tipoUsuarioType', 'tipoUsuarioId');
    }

}
