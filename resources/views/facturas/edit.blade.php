@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('facturas.update', $factura->id) }}">
                        @csrf
                        @method('put')

                        <!--Numero de factura-->
                        <div class="row mb-3">
                            <label for="numero_de_factura" class="col-md-4 col-form-label text-md-end">{{ __('numero_de_factura') }}</label>

                            <div class="col-md-6">
                                <input id="numero_de_factura" type="number"
                                class="form-control"
                                name="numero_de_factura" placeholder="{{$factura->numero_de_factura}}" value="{{$factura->numero_de_factura}}"
                                required autocomplete="numero_de_factura" autofocus>
                            </div>
                        </div>

                        <!--USERID-->
                        <div class="row mb-3">
                            <label for="user_id" class="col-md-4 col-form-label text-md-end">Código de cliente</label>

                            <div class="col-md-6">
                                <select name="user_id" id="user_id" class="form-select">
                                    <option value="{{$factura->user_id}}">{{$factura->user_id}}</option>
                                    @foreach ($usuarios as $usuario)
                                        <option aria-placeholder="{{$usuario->id}}" value="{{$usuario->id}}">{{$usuario->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!--FECHA-->
                        <div class="row mb-3">
                            <label for="fecha" class="col-md-4 col-form-label text-md-end">Fecha</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control" name="fecha"
                                    value="{{$factura->fecha}}" placeholder="{{$factura->fecha}}" required autocomplete="fecha" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="btnEditar" id="btnEditar" type="submit" class="btn btn-primary">
                                    Actualizar
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
