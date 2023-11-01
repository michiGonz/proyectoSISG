@extends('base')
@section('title', 'Inicio')
@section('content')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left- shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                        Jornadas Ambientales Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Programación Anual: {{$indicadorplan->programacion_anual}}</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="card">
    <h2 class="card-header">
        Jornada Ambiental
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('jornada.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table table-striped-columns text-center">
            <table class="table mt-3 table table-striped-columns" id="jornada">

                <thead>
                    <tr>

                        <th>Descripción</th>
                        <th>Ubicación</th>
                        <th>Date</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($jornada as $jornada)
                    <tr>

                        <td>{{ $jornada->descripcion }}</td>
                        <td>{{ $jornada->ubicacion }}</td>
                        <td>{{ $jornada->date}}</td>
                        <td>
                            <a href="{{ route('jornada.show', $jornada->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('jornada.destroy', $jornada->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('jornada.edit', $jornada->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    DataTabla('#jornada', [3, 'desc']);
</script>
@endsection