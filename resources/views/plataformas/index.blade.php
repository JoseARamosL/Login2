@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de plataformas</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($plataformas as $plataforma)
                            <li class="list-group-item">
                                <div>
                                    {{$plataforma->name}}
                                </div>
                                <div>
                                    <form action="{{route('plataformas.destroy', $plataforma)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-secondary" type="submit">Eliminar</button>
                                    </form>
                                    <br>
                                    <form action="{{route('plataformas.edit', $plataforma)}}" method="GET">
                                        @csrf
                                        <button class="btn btn-secondary" type="submit">Editar</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
