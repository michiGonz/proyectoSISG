@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Planificacion de indicadores QQGAS</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('indicadorplan.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('indicadorplan.create') }}"><span>Crear
                                Planificación</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<table class="table table-success table-striped">
    <tr>
        <td><a class="nav-link" href="{{ route('planificacionformacion.index') }}"><span>Plan de Formacion Seguridad
                    Salud y Ambiente</span></a></td>
        <td><a class="btn btn-success" href="{{ route('planificacionformacion.index') }}"><span>Agregar
                    Planificacion</span></button></td>
    </tr>

</table>


<div class="table table-striped-columns table-secondary ">
    <table class="table mt-3">

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
                <td>{{ $indicadorplan->date}}</td>

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

    @endsection
