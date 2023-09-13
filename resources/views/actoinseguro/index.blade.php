@extends('base')

@section('title', 'Inicio')

@section('content')

<div class="container">
    <h2>Acto Inseguro</h2>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('actoinseguro.create') }}"><span>Crear Reporte</span></a></td>

    </tbody>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Observaciones</th>
            <th>Fecha</th>
            <th>total</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($actoinseguro as $actoinseguro)
            <tr>
                <td>{{ $actoinseguro->id }}</td>
                <td>{{ $actoinseguro->observacion }}</td>
                <td>{{ $actoinseguro->date }}</td>
                <td>{{ $actoinseguro->total}}</td>
                <td>
                    <a href="{{ route('actoinseguro.show', $actoinseguro->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('actoinseguro.destroy', $actoinseguro->id) }}" method="POST" class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('actoinseguro.edit', $actoinseguro->id) }}" class="btn btn-primary btn-sm">Editar F</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
