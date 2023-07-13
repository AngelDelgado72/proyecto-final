<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'direccion',
        'estado',
        'pais',
        'codigo_postal',
        'numero_telefono',
        'departamento',
        'cargo',
        'reporta_a',
    ];
}
