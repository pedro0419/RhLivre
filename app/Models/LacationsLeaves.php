<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LacationsLeaves extends Model
{
    protected $fillable = [
        'tipo_ferias',
        'data_inicio',
        'data_fim',
        'observacoes',
        'employee_id'
    ];
}
