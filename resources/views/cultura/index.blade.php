@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header ">
        Cultura En Seguridad Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('cultura.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
<div class="table table-striped-columns text-center">
    <table class="table mt-3 text-center" id="cultura">

        <thead>
            <tr>
                
                <th>Acciones Ejecutadas</th>
                <th>Observacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cultura as $cultura)
            
            <tr>
             
                <td>{{ $cultura->comite_cumplido}}</td>
                <td>{{ $cultura->observacion}}</td>
                <td>{{ $cultura->date}}</td>
                
            
                <td>
                    <a href="{{ route('cultura.show', $cultura->id) }}"
                    class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                    <form action="{{ route('cultura.destroy', $cultura->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('cultura.edit', $cultura->id) }}"
                    class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                </td>
            </tr>

            @endforeach
        </tbody>
        
    </table>
    <script>
    DataTabla('#cultura',[4, 'desc']);
</script>
    @endsection
