<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concepto;
use App\Models\Factura;

class ConceptoController extends Controller
{
    public function index()
    {
        $conceptos = Concepto::all();
        return view('conceptos.index', compact('conceptos'));
    }

    public function edit(Request $request)
    {
        $concepto = Concepto::findOrFail($request->id);
        return view('conceptos.edit', compact('concepto'));
    }

    public function update(Request $request)
    {
        $concepto = Concepto::findOrFail($request->id);

        $concepto->concepto = $request->concepto;
        $concepto->unidades = $request->unidades;
        $concepto->precio = $request->precio;
        $concepto->importe = $request->importe;

        $concepto->save();

        return redirect()->route('conceptos.index');
    }

    public function create()
    {
        $facturas = Factura::all();
        return view('conceptos.create', compact('facturas'));
    }

    public function store(Request $request)
    {
        $concepto = Concepto::create($request->all());

        $concepto->save();

        return redirect()->route('conceptos.index');
    }

    public function destroy(Request $request)
    {
        $concepto = Concepto::destroy($request->id);
        return redirect()->route('conceptos.index');
    }
}
