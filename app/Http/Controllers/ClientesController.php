<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public function __construct()
    {
        //verificar que el usuario este autenticado
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Clientes::all();
        return view('pages/dashboard/clientes', ['clientes' => $clientes]);
    }


    public function store(Request $request)
    {
        
        //validar los datos del formulario
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'nombre_usuario' => 'required',
            'email' => 'required',
            'id_cliente' => 'required',
            'telefono' => 'required',
            'nombre_empresa' => 'required',
        ]);

        Clientes::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'nombre_usuario' => $request->nombre_usuario,
            'email' => $request->email,
            'id_cliente' => $request->id_cliente,
            'telefono' => $request->telefono,
            'nombre_empresa' => $request->nombre_empresa,
        ]);

        //redireccionar a la vista de colaboradores
        return redirect()->route('clientes.index');
    
    }

    public function create()
    {
        return view('pages/dashboard/crear-cliente');
    }

    public function delete($id_cliente)
    {
        Clientes::find($id_cliente)->delete();
        return back();
    }
    
}
