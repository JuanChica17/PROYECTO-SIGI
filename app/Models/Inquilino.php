<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model
{
    protected $fillable = [
        'id_inquilino',
        'nombre_inquilino',
        'correo',
        'direccion',
        'telefono',
        'estado_civil',
        'id_facturacion',
    ];
}
