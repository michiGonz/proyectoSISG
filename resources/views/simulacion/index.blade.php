@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Simulacro
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('simulacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
<div class="table table-striped-columns ">
    <table class="table mt-3 table table-striped-columns" id="simulacion">

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
    <script>
    DataTabla('#simulacion',[3, 'desc']);
</script>
@endsection
