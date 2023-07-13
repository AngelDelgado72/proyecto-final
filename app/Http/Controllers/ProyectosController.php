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

    //funcion que regresa la vista de proyectos
    public function index()
    {
        //obtener los datos de la base de datos y guardarlos en una variable para despues pasarlos a la vista de proyectos
        $proyectos = Proyectos::all();
        return view('pages/dashboard/proyectos', ['proyectos' => $proyectos]);
    }


    //funcion para agregar datos a la base de datos
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

        //mete los datos en la base de datos 
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

    //funcion que redirige a la vista de crear proyectos
    public function create()
    {
        return view('pages/dashboard/crear-proyecto');
    }

    //eliminar un proyecto de la base de datos
    public function delete($id_proyecto)
    {
        Proyectos::find($id_proyecto)->delete();
        return back();
    }



}


