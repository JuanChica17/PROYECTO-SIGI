<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $fillable = [
        'id_facturacion',
        'mes a pagar',
        'concepto',
        'valor',
        'deducciones',
        'total_pagar',
        'id_alquiler',
    ];
}
