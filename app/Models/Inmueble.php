<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $fillable = [
        'id_inmueble',
        'direccion',
        'tipo',
        'description',
        'precio',
        'id_propietario',
    ];
}
