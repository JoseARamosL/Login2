@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header div__space">
                    Lista de Conceptos
                    <form action="{{route('conceptos.create')}}" method="GET">
                        @csrf
                        <button class="btn__div">Crear Concepto</button>
                    </form>
                </div>

                <div class="card-body table-responsive">
                    <ul class="list-group">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>Concepto</td>
                                    <td>Unidades</td>
                                    <td>Precio</td>
                                    <td>Importe</td>
                                    <td>Número de factura</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($conceptos as $concepto)
                                    <tr>
                                        <td>{{ $concepto->concepto }}</td>
                                        <td>{{ $concepto->unidades }}</td>
                                        <td>{{ $concepto->precio }}</td>
                                        <td>{{ $concepto->importe }}</td>
                                        <td>{{ $concepto->factura_id }}</td>
                                        <td>
                                            <form action="{{route('conceptos.destroy', $concepto)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-secondary btn1" type="submit">Eliminar</button>
                                            </form>
                                            <form action="{{route('conceptos.edit', $concepto)}}" method="GET">
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
