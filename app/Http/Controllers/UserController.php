<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::orderBy('id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $capacidades = [];

        if(isset($_POST['btnEditar'])){
            $checkInstagram = false;
            $checkTwitter = false;
            $checkFacebook = false;

            if(isset($_POST['instagram'])){
                $checkInstagram = $_POST['instagram'];
            }

            if(isset($_POST['twitter'])){
                $checkTwitter = $_POST['twitter'];
            }

            if(isset($_POST['facebook'])){
                $checkFacebook = $_POST['facebook'];
            }

            $capacidades =[
                'Instagram' => $checkInstagram,
                'Twitter' => $checkTwitter,
                'Facebook' => $checkFacebook
            ];

        }

        $usuario = User::findOrFail($request->id);
        $usuario->name = $request->name;
        $usuario->phone = $request->phone;
        $usuario->DNI = $request->DNI;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->role = $request->role;
        $usuario->capacidades = $capacidades;

        $usuario->save();

        $usuarios = User::orderBy('id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));

    }

    public function destroy(Request $request)
    {
        $usuario = User::destroy($request->id);
        $usuarios = User::orderBy('id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }
}
