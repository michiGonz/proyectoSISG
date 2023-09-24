@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2>Auditorias de Permisos de Trabajo</h2>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('auditorias.create') }}"><span>Crear Reporte</span></a></td>

    </tbody>
</div>

<div class="table tabble-responsive">


    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Auditorias Generadas</th>
                <th>Auditadas</th>
                <th>Permisos de Trabajo Auditados</th>
                <th>Permisos de Trabajo sin desviacion</th>
                <th>Permisos de Trabajo no Auditados</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($auditorias as $auditorias)
                <tr>
                    <td>{{ $auditorias->id }}</td>
                    <td>{{ $auditorias->auditorias_generadas}}</td>
                    <td>{{ $auditorias->auditadas }}</td>
                    <td>{{ $auditorias->auditadas_desviaciones}}</td>
                    <td>{{ $auditorias->auditadas_sindesviaciones}}</td>
                    <td>{{ $auditorias->auditadas_sindesviaciones}}</td>
                    <td>{{ $auditorias->no_auditados}}</td>
                    <td>{{ $auditorias->date }}</td>
                    <td>
                        <a href="{{ route('auditorias.show', $auditorias->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('auditorias.destroy', $auditorias->id) }}" method="POST" class="d-inline">
                            @csrf
                        </form>
                        <a href="{{ route('auditorias.edit', $auditorias->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
