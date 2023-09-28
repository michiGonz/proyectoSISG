@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Investigacion de Incidentes
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('investigacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
<div class=" table table-striped-columns">
    
    <table class="table mt-3"  id="investigacion">

        <thead>
            <tr>
                <th>ID</th>
                <th>Unidad Funcional</th>
                <th>Nombre Del incidente</th>
                <th>Ubicacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($investigacion as $investigacion)
                <tr>
                    <td>{{ $investigacion->id }}</td>
                    <td>{{ $investigacion->uf}}</td>
                    <td>{{ $investigacion->nombre_incidente}}</td>
                    <td>{{ $investigacion->nombre_lugar}}</td>
                    <td>{{ $investigacion->date}}</td>
                   

                    <td>
                        <a href="{{ route('investigacion.show', $investigacion->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('investigacion.destroy', $investigacion->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('investigacion.edit', $investigacion->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
    DataTabla('#investigacion',[5, 'desc']);
</script>
@endsection