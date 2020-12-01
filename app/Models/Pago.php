<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'id_pago',
        'Fecha',
        'valor',
        'total_pagado',
        'comentarios',
        'id_inquilino',
    ];
}
