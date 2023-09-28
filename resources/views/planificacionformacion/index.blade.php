@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Planificacion de Plan de Formacion Seguridad, Salud y Ambiente</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('planificacionformacion.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('planificacionformacion.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<div class="container">
    <table class="table mt-3" id="control">

        <thead>
            <tr>
                <th>ID</th>
                <th>Meta Anual</th>
                <th>Meta Mensual</th>
                <th>Programadas Ambiente</th>
                <th>Programadas Salud</th>
                <th>Programadas Seguridad</th>
                <th>Fecha Planificada</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($planificacionformacion as $planificacionformacion)
                <tr>
                    <td>{{ $planificacionformacion->id }}</td>
                    <td>{{ $planificacionformacion->programadas_anual}}</td>
                    <td>{{ $planificacionformacion->programadas_mensual }}</td>
                    <td>{{ $planificacionformacion->programadas_ambiente}}</td>
                    <td>{{ $planificacionformacion->programadas_salud}}</td>
                    <td>{{ $planificacionformacion->programadas_seguridad}}</td>
                    <td>{{ $planificacionformacion->date}}</td>

                    <td>
                        <a href="{{ route('planificacionformacion.show', $planificacionformacion->id) }}" class="btn btn-primary btn-sm">Mostrar Planificacion</a>
                        <form action="{{ route('planificacionformacion.destroy', $planificacionformacion->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('planificacionformacion.edit', $planificacionformacion->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#control',[7, 'desc']);
</script>
@endsection
