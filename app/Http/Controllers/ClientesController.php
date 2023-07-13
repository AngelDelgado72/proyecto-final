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

    //funcion que regresa la vista
    public function index()
    {
        $clientes = Clientes::all();
        return view('pages/dashboard/clientes', ['clientes' => $clientes]);
    }


    //funcion para agregar datos a la base de datos
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

        //mete los datos
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

    //funcion que redirige a la vista de crear clientes
    public function create()
    {
        return view('pages/dashboard/crear-cliente');
    }

    //funcion para eliminar 
    public function delete($id_cliente)
    {
        //eliminar el cliente
        Clientes::find($id_cliente)->delete();
        return back();
    }
    
}
