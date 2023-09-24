@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2>Acto Seguro</h2>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('actoseguro.create') }}"><span>Crear
                        Reporte</span></a></td>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns ">
    <table class="table mt-3">
        <thead>
            <tr>
                <th>id</th>
                <th>RP</th>
                <th>EPP</th>
                <th>PP</th>
                <th>HE</th>
                <th>POL</th>
                <th>A</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($actos_seguro as $actoseguro)
            <tr>
                <td>{{ $actoseguro->id }}</td>
                <td>{{ $actoseguro->reacciones_personas }}</td>
                <td>{{ $actoseguro->equipo_proteccion}}</td>
                <td>{{ $actoseguro->posicion_persona}}</td>
                <td>{{ $actoseguro->herramienta_equipo}}</td>
                <td>{{ $actoseguro->procedimiento_orden}}</td>
                <td>{{ $actoseguro->ambiente}}</td>
                <td>{{ $actoseguro->date }}</td>
                <td>

                    <a href="{{ route('actoseguro.show', $actoseguro->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('actoseguro.edit', $actoseguro->id) }}" method="POST" class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('actoseguro.edit', $actoseguro->id) }}" class="btn btn-primary btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
