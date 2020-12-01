<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'id_venta',
        'precio',
        'Forma_pago',
        'nombre_comprador',
        'correo',
        'direccion',
        'telefono',
        'id_contrato',
    ];
}
