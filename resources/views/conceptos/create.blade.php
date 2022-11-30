@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear</div>

                <div class="card-body">
                    <form method="POST" action="{{route('conceptos.store')}}">
                        @csrf

                        <!--CONCEPTO-->
                        <div class="row mb-3">
                            <label for="concepto" class="col-md-4 col-form-label text-md-end">{{ __('Concepto') }}</label>

                            <div class="col-md-6">
                                <input id="concepto" type="text"
                                class="form-control"
                                name="concepto" placeholder="concepto"
                                required autocomplete="concepto" autofocus>
                            </div>
                        </div>

                        <!--FACTURAID-->
                        <div class="row mb-3">
                            <label for="factura_id" class="col-md-4 col-form-label text-md-end">Código de factura</label>

                            <div class="col-md-6">
                                <select name="factura_id" id="factura_id" class="form-select">
                                    <option value="">Selecciona un id</option>
                                    @foreach ($facturas as $factura)
                                        <option aria-placeholder="{{$factura->id}}" value="{{$factura->id}}">{{$factura->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!--Unidades-->
                        <div class="row mb-3">
                            <label for="unidades" class="col-md-4 col-form-label text-md-end">Unidades</label>

                            <div class="col-md-6">
                                <input id="unidades" type="number" class="form-control" name="unidades"
                                    placeholder="Unidades" required autocomplete="unidades" autofocus>
                            </div>
                        </div>

                        <!--Precio-->
                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="precio" step="any"
                                    placeholder="Precio" required autocomplete="precio" autofocus>
                            </div>
                        </div>

                        <!--Importe-->
                        <div class="row mb-3">
                            <label for="importe" class="col-md-4 col-form-label text-md-end">Importe</label>

                            <div class="col-md-6">
                                <input id="importe" type="number" class="form-control" name="importe" step="any"
                                    placeholder="Importe" required autocomplete="importe" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="btnCrear" id="btnCrear" type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
