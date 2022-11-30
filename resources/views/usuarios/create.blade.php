@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear</div>

                <div class="card-body">
                    <form method="POST" action="{{route('usuarios.store')}}">
                        @csrf

                        <!--NOMBRE-->
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="string"
                                class="form-control @error('nombre') is-invalid @enderror"
                                name="nombre" placeholder="nombre"
                                required autocomplete="nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--NIF-->
                        <div class="row mb-3">
                            <label for="NIF" class="col-md-4 col-form-label text-md-end">NIF</label>

                            <div class="col-md-6">
                                <input id="NIF" type="text" class="form-control" name="NIF"
                                    placeholder="NIF" required autocomplete="NIF" autofocus>

                                @error('NIF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!---DOMICILIO-->
                        <div class="row mb-3">
                            <label for="domicilio" class="col-md-4 col-form-label text-md-end">Domicilio</label>

                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control" name="domicilio"
                                    placeholder="Domicilio" required autocomplete="domicilio" autofocus>
                            </div>
                        </div>

                        <!--CODIGO POSTAL-->
                        <div class="row mb-3">
                            <label for="codigo_postal" class="col-md-4 col-form-label text-md-end">Código Postal</label>

                            <div class="col-md-6">
                                <input id="codigo_postal" type="number" class="form-control" name="codigo_postal"
                                    placeholder="codigo postal" required autocomplete="codigo_postal" autofocus>
                            </div>
                        </div>

                        <!--POBLACION-->
                        <div class="row mb-3">
                            <label for="poblacion" class="col-md-4 col-form-label text-md-end">Poblacion</label>

                            <div class="col-md-6">
                                <input id="Poblacion" type="text" class="form-control" name="poblacion"
                                    placeholder="Poblacion" required autocomplete="poblacion" autofocus>
                            </div>
                        </div>

                        <!--Provincia-->
                        <div class="row mb-3">
                            <label for="provincia" class="col-md-4 col-form-label text-md-end">Provincia</label>

                            <div class="col-md-6">
                                <input id="provincia" type="text" class="form-control" name="provincia"
                                    placeholder="Provincia" required autocomplete="provincia" autofocus>
                            </div>
                        </div>

                        <!--Pais-->
                        <div class="row mb-3">
                            <label for="pais" class="col-md-4 col-form-label text-md-end">País</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais"
                                    placeholder="Pais" required autocomplete="provincia" autofocus>
                            </div>
                        </div>

                        <!--FECHADEALTA-->
                        <div class="row mb-3">
                            <label for="fecha_de_alta" class="col-md-4 col-form-label text-md-end">Fecha de Alta</label>

                            <div class="col-md-6">
                                <input id="fecha_de_alta" type="date" class="form-control" name="fecha_de_alta"
                                    placeholder="Fecha de alta" required autocomplete="fecha_de_alta" autofocus>
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
