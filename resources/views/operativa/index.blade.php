@extends('base')
@section('title', 'Inicio')
@section('content')



<div class="card">
    <h2 class="card-header">
        Eficiencia Operativa
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('operativa.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns">
            <table class="table mt-3" id="operativa">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Acciones Ejecutadas</th>
                        <th>Observacion</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($operativa as $operativa)

                    <tr>
                        <td>{{ $operativa->id }}</td>
                        <td>{{ $operativa->comite_cumplido}}</td>
                        <td>{{ $operativa->observacion}}</td>
                        <td>{{ $operativa->date}}</td>


                        <td>
                            <a href="{{ route('operativa.show', $operativa->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                            <form action="{{ route('operativa.destroy', $operativa->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('operativa.edit', $operativa->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <script>
                DataTabla('#operativa', [4, 'desc']);
            </script>
            @endsection