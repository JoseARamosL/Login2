@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('conceptos.update', $concepto->id) }}">
                        @csrf
                        @method('put')

                        <!--Concepto-->
                        <div class="row mb-3">
                            <label for="concepto" class="col-md-4 col-form-label text-md-end">{{ __('Concepto') }}</label>

                            <div class="col-md-6">
                                <input id="concepto" type="text"
                                class="form-control"
                                name="concepto" placeholder="{{$concepto->concepto}}" value="{{$concepto->concepto}}"
                                required autocomplete="concepto" autofocus>
                            </div>
                        </div>

                        <!--Unidades-->
                        <div class="row mb-3">
                            <label for="unidades" class="col-md-4 col-form-label text-md-end">{{ __('Unidades') }}</label>

                            <div class="col-md-6">
                                <input id="unidades" type="number"
                                class="form-control"
                                name="unidades" placeholder="{{$concepto->unidades}}" value="{{$concepto->unidades}}"
                                required autocomplete="unidades" autofocus>
                            </div>
                        </div>

                        <!--Precio-->
                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" step="any"
                                class="form-control"
                                name="precio" placeholder="{{$concepto->precio}}" value="{{$concepto->precio}}"
                                required autocomplete="precio" autofocus>
                            </div>
                        </div>

                        <!--Importe-->
                        <div class="row mb-3">
                            <label for="importe" class="col-md-4 col-form-label text-md-end">{{ __('Importe') }}</label>

                            <div class="col-md-6">
                                <input id="importe" type="number" step="any"
                                class="form-control"
                                name="importe" placeholder="{{$concepto->importe}}" value="{{$concepto->importe}}"
                                required autocomplete="importe" autofocus>
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
