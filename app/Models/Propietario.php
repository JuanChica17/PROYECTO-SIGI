<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $fillable = [
        'id_propietario',
        'nombre',
        'apellido',
        'correo',
        'direccion',
        'telefono',
        'cuenta_bancaria',
    ];
}
