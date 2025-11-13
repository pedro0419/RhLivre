<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
     protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'data_nascimento',
        'salario',
        'cargo_id',
        'departamento_id' 
    ];
}
