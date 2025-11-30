<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceReviews extends Model
{
    protected $fillable = [
        'nota',
        'data_avaliacao',
        'observacao',
        'id_employee'
    ];
}
