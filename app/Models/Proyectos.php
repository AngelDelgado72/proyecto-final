<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nombre_proyecto',
        'cliente',
        'fecha_inicio',
        'fecha_fin',
        'tarifa',
        'prioridad',
        'lider_proyecto',
        'miembros_equipo',
        'descripcion',
    ];
}
