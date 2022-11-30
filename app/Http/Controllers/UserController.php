<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::orderBy('id', 'asc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario = User::create($request->all());

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        $usuario->nombre = $request->nombre;
        $usuario->NIF = $request->NIF;
        $usuario->domicilio = $request->domicilio;
        $usuario->poblacion = $request->poblacion;
        $usuario->provincia = $request->provincia;
        $usuario->pais = $request->pais;
        $usuario->fecha_de_alta = $request->fecha_de_alta;

        $usuario->save();

        $usuarios = User::orderBy('id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));

    }

    public function destroy(Request $request)
    {
        $usuario = User::destroy($request->id);
        $usuarios = User::orderBy('id', 'asc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }
}
