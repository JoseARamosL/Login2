<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;
use App\Models\Concepto;
use Illuminate\Support\Collection;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::orderBy('id', 'asc')->paginate();
        return view('facturas.index', compact('facturas'));
    }

    public function edit(Request $request)
    {
        $usuarios = User::all();
        $factura = Factura::findOrFail($request->id);
        return view('facturas.edit', compact('factura', 'usuarios'));
    }

    public function update(Request $request)
    {
        $factura = Factura::findOrFail($request->id);
        $factura->numero_de_factura = $request->numero_de_factura;
        $factura->user_id = $request->user_id;
        $factura->fecha = $request->fecha;
        $factura->concepto = $request->concepto;
        $factura->unidades = $request->unidades;
        $factura->precio = $request->precio;
        $factura->importe = $request->importe;

        $factura->save();

        $facturas = Factura::orderBy('id', 'asc')->paginate();
        return view('facturas.index', compact('facturas'));

    }

    public function destroy(Request $request)
    {
        $factura = Factura::destroy($request->id);
        $facturas = Factura::orderBy('id', 'asc')->paginate();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        $usuarios = User::all();
        return view('facturas.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $factura = Factura::create($request->all());

        $factura->save();

        return redirect()->route('facturas.index');
    }

    public function show(Request $request)
    {
        $conceptos2 = Concepto::all();
        $conceptos = new Collection;

        foreach($conceptos2 as $con) {
            if($con->factura_id == $request->id) {
                $conceptos->push($con);
            }
        }

        $factura = Factura::findOrFail($request->id);

        return view('facturas.show', compact('factura', 'conceptos'));
    }
}
