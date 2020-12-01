<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $fillable = [
        'id_alquiler',
        'precio_alquiler',
        'forma_pago',
        'fecha_inicio',
        'fecha_fin',
        'id_contrato',
    ];
}
