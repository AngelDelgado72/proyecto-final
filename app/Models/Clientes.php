<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    //definir la tabla de la base de datos que va a utilizar este modelo
    protected $fillable = [
        'nombre',
        'apellido',
        'nombre_usuario',
        'email',
        'id_cliente',
        'telefono',
        'nombre_empresa',
    ];
}
