<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salvar extends Model
{
    use HasFactory;

    protected $table = 'salvar';

    protected $fillable = ['salvarEmail'];
}
