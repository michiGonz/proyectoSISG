@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container ">
    <h1>Simulacro</h1>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('simulacion.create') }}"><span>Crear Reporte</span></a></td>

    </tbody>
</div>

<div class="table table-striped-columns table-secondary ">
    <table class="table mt-3 table table-striped-columns table-secondary">

        <thead>
            <tr>
                <th>ID</th>
                <th>Logrado</th>
                <th>Nombre</th>
                <th>Date</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($simulacion as $simulacion)
                <tr>
                    <td>{{ $simulacion->id }}</td>
                    <td>{{ $simulacion->simulacro_cumplido }}</td>
                    <td>{{ $simulacion->name }}</td>
                    <td>{{ $simulacion->date}}</td>
                    <td>
                        <a href="{{ route('simulacion.show', $simulacion->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('simulacion.destroy', $simulacion->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('simulacion.edit', $simulacion->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
