@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Aprendiendo en el Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('aprendiendo.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

<div class="table table-striped-columns text-center">
    <table class="table mt-3" id="aprendiendo">

        <thead>
            <tr>
    
                <th>Cant de Aprendiendo en el Trabajo</th>
                <th>Observacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($aprendiendo as $aprendiendo)
            
            <tr>
            
                <td>{{ $aprendiendo->cantidad_actividad }}</td>
                <td>{{ $aprendiendo->nombre }}</td>
                <td>{{ $aprendiendo->observacion}}</td>
                <td>{{ $aprendiendo->date}}</td>
                
                <td>
                    <a href="{{ route('aprendiendo.show', $aprendiendo->id) }}"
                    class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                    <form action="{{ route('aprendiendo.destroy', $aprendiendo->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('aprendiendo.edit', $aprendiendo->id) }}"
                    class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#aprendiendo',[4, 'desc']);
</script>
    @endsection
