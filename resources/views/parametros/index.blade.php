@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Reporte de Parametros Ambientales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('parametros.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

<div class=" card-body table table-striped-columns">
    <table class="table mt-3" id="parametros">

        <thead>
            <tr>
                <th>ID</th>
                <th>Planificados</th>
                <th>Ejecutadas</th>
                <th>PROD</th>
               <Th>MTTO</Th> 
                <th>SSGG</th>
                <th>SC</th>
                <th>CC</th>
               <th>SSII</th>
                <th>Fecha</th>
                <th>Observacion</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($parametros as $parametros)
            
            <tr>
                <td>{{ $parametros->id }}</td>
                <td>{{ $parametros->planificado}}</td>
                <td>{{ $parametros->ejecutados}}</td>
                <td>{{ $parametros->PROD}}</td>
                <td>{{ $parametros->MTTO}}</td>
                <td>{{ $parametros->SSGG}}</td>
                <td>{{ $parametros->SC}}</td>
                <td>{{ $parametros->CC}}</td>
                <td>{{ $parametros->SSII}}</td>
                <td>{{ $parametros->date}}</td>
                <td>{{ $parametros->observacion}}</td>
            
            
                <td>
                    <a href="{{ route('parametros.show', $parametros->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('parametros.destroy', $parametros->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('parametros.edit', $parametros->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#parametros',[10, 'desc']);
</script>
    @endsection
