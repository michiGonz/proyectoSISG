@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
       Comite de Seguridad Salud Laborales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('comite.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

<div class="table table-striped-columns" >
    <table class="table mt-3 table table-striped-columns" id="comite">

        <thead>
            <tr>
                <th>ID</th>
                <th>Ejecutados</th>
                <th>Observacion</th>
                <th>Date</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comite as $comite)
                <tr>
                    <td>{{ $comite->id }}</td>
                    <td>{{ $comite->ejecutadas }}</td>
                    <td>{{ $comite->observacion }}</td>
                    <td>{{ $comite->date}}</td>
                    <td>
                        <a href="{{ route('comite.show', $comite->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('comite.destroy', $comite->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('comite.edit', $comite->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
            </table>
        </tbody>
    <script>
        DataTabla('#comite', [3, 'desc']);
    </script>
@endsection
