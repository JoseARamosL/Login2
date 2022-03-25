<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plataforma;

class PlataformaController extends Controller
{

    public function index()
    {
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataformas.index', compact('plataformas'));
    }

    public function create(array $data)
    {
        return Plataforma::create([
            'name' => $data['name'],
        ]);
    }

    public function store(Request $request)
    {
        $plataforma = Plataforma::create($request->all());
        $plataforma->save();
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataformas.index', compact('plataformas'));
    }

    public function registerPlataforma(){
        return view('plataformas.register');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $plataforma = Plataforma::findOrFail($request->id);
        return view('plataformas.edit', compact('plataforma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $plataforma = Plataforma::findOrFail($request->id);
        $plataforma->name = $request->name;

        $plataforma->save();

        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataformas.index', compact('plataformas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $plataforma = Plataforma::destroy($request->id);
        $plataformas = Plataforma::orderBy('id', 'desc')->paginate();
        return view('plataformas.index', compact('plataformas'));
    }
}
