<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaboradores;

class ColaboradoresController extends Controller
{
    //constructor para verificar que el usuario este autenticado
    public function __construct()
    {
        //verificar que el usuario este autenticado
        $this->middleware('auth');
    }

     //retornar la vista de colaboradores
     public function index()
     {
        $colaboradores = Colaboradores::all();
        return view('pages/dashboard/colaboradores', ['colaboradores' => $colaboradores]);
     }

    //guardar los colaboradores en la base de datos
    public function store(Request $request)
    {
        
        //validar los datos del formulario
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'direccion' => 'required',
            'estado' => 'required',
            'pais' => 'required',
            'codigo_postal' => 'required',
            'numero_telefono' => 'required',
            'departamento' => 'required',
            'cargo' => 'required',
            'reporta_a' => 'required',
        ]);

        Colaboradores::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            'direccion' => $request->direccion,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'codigo_postal' => $request->codigo_postal,
            'numero_telefono' => $request->numero_telefono,
            'departamento' => $request->departamento,
            'cargo' => $request->cargo,
            'reporta_a' => $request->reporta_a,
        ]);

     //redireccionar a la vista de colaboradores
     return redirect()->route('colaboradores.index');

     
    }

     //regresar la vista de editar emisora
     public function create()
     {
         return view('pages/dashboard/crear-colaborador');
     }

         //borrar la emisora de la base de datos
    public function delete($id_colaborador)
    {
        //borrar la emisora de la base de datos con el id
        Colaboradores::find($id_colaborador)->delete();
        return back();
    }


    
}
