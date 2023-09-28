@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Planificacion de Indicadores
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('indicadorplan.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
<table class="table table-success table-striped">
    <tr>
        <td><a class="nav-link" href="{{ route('planificacionformacion.index') }}"><span>Plan de Formacion Seguridad
                    Salud y Ambiente</span></a></td>
        <td><a class="btn btn-success" href="{{ route('planificacionformacion.index') }}"><span>Agregar
                    Planificacion</span></button></td>
    </tr>

</table>


<div class="table table-striped-columns">
    <table class="table mt-3" id="indicador">

        <thead>
            <tr>
                <th>ID</th>
                <th>Indicador</th>
                <th>Meta Establecida</th>
                <th>Programacion Anual</th>
                <th>Programacion Mensual</th>
                <th>Fecha Planificada</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($indicadorplan as $indicadorplan)
            
            <tr>
                <td>{{ $indicadorplan->id }}</td>
                <td>{{ $indicadorplan->nombre_indicador }}</td>
                <td>{{ $indicadorplan->meta }}</td>
                <td>{{ $indicadorplan->programacion_anual}}</td>
                <td>{{ $indicadorplan->programadas_mes}}</td>
                <td>
                    <?php $fechas = json_decode($indicadorplan->date);?>
                    @foreach ($fechas as $fecha)
                        {{$fecha}}<br>
                    @endforeach
                </td>
                

                <td>
                    <a href="{{ route('indicadorplan.show', $indicadorplan->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Planificación</a>
                    <form action="{{ route('indicadorplan.destroy', $indicadorplan->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('indicadorplan.edit', $indicadorplan->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#indicador',[4, 'desc']);
</script>
    @endsection
