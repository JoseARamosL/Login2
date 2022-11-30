@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header div__space">
                    Lista de Facturas
                    <form action="{{route('facturas.create')}}" method="GET">
                        @csrf
                        <button class="btn__div">Crear Factura</button>
                    </form>
                </div>

                <div class="card-body table-responsive">
                    <ul class="list-group">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>Ver Factura</td>
                                    <td>Número de Factura</td>
                                    <td>Código de Cliente</td>
                                    <td>Fecha</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($facturas as $factura)
                                    <tr>
                                        <td>
                                            <form action="{{route('facturas.show', $factura)}}" method="GET" class="form__btn">
                                                @csrf
                                                <button class="btn__div">Ver</button>
                                            </form>
                                        </td>
                                        <td>{{ $factura->numero_de_factura }}</td>
                                        <td>{{ $factura->user_id }}</td>
                                        <td>{{ $factura->fecha }}</td>
                                        <td>
                                            <form action="{{route('facturas.destroy', $factura)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-secondary btn1" type="submit">Eliminar</button>
                                            </form>
                                            <form action="{{route('facturas.edit', $factura)}}" method="GET">
                                                @csrf
                                                <button class="btn btn-secondary btn2" type="submit">Editar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .form__btn {
        padding-top: 25px;
        text-align: center;
    }

    .btn__div {
        background-color: lightblue;
        border-radius: 10px;
    }
    .div__space {
        display: flex;
        justify-content: space-between;
    }

    .btn1 {
        background-color: green;
        margin-bottom: 10px;
    }

    .btn2 {
        background-color: red;
    }
</style>
@endsection
