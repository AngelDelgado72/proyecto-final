<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{

    public function __construct()
    {
        //verificar que el usuario este autenticado
        $this->middleware('auth');
    }

    public function index()
    {
        $proyectos = Proyectos::all();
        return view('pages/dashboard/proyectos', ['proyectos' => $proyectos]);
    }

    public function store(Request $request)
    {
        
        //validar los datos del formulario
        $this->validate($request, [
            'nombre_proyecto' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'tarifa' => 'required',
            'prioridad' => 'required',
            'lider_proyecto' => 'required',
            'miembros_equipo' => 'required',
            'descripcion' => 'required',
        ]);

        Proyectos::create([
            'nombre_proyecto' => $request->nombre_proyecto,
            'cliente' => $request->cliente,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'tarifa' => $request->tarifa,
            'prioridad' => $request->prioridad,
            'lider_proyecto' => $request->lider_proyecto,
            'miembros_equipo' => $request->miembros_equipo,
            'descripcion' => $request->descripcion,
        ]);

        //redireccionar a la vista de colaboradores
        return redirect()->route('proyectos.index');
    
    }

    public function create()
    {
        return view('pages/dashboard/crear-proyecto');
    }

    public function delete($id_proyecto)
    {
        Proyectos::find($id_proyecto)->delete();
        return back();
    }



}


