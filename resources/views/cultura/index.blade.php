@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Cultura En Seguridad Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('cultura.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
<div class="table table-striped-columns">
    <table class="table mt-3" id="cultura">

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
            @foreach ($cultura as $cultura)
            
            <tr>
                <td>{{ $cultura->id }}</td>
                <td>{{ $cultura->comite_cumplido}}</td>
                <td>{{ $cultura->observacion}}</td>
                <td>{{ $cultura->date}}</td>
                
            
                <td>
                    <a href="{{ route('cultura.show', $cultura->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('cultura.destroy', $cultura->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('cultura.edit', $cultura->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#cultura',[4, 'desc']);
</script>
    @endsection
