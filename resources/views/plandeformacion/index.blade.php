
@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Reporte de Formacion Seguridad, Salud y Ambiente</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('plandeformacion.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('plandeformacion.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>
<div class=" table table-striped-columns table-secondary ">
    <table class="table mt-3  table-secondary">

        <thead>
            <tr>
                <th>ID</th>
                <th>Plan de formaciones ejecutadas</th>
                <th>Formaciones ejecutadas de Ambiente</th>
                <th>Fecha Ejecutada de Ambiente </th>
                <th>Formaciones ejecutadas de Seguridad</th>
                <th>Fecha Ejecutada de Seguridad </th>
                <th>Formaciones ejecutadas de Salud</th>
                <th>Fecha Ejecutada de Salud</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($plandeformacion as $plandeformacion)
                <tr>
                    <td>{{ $plandeformacion->id }}</td>
                    <td>{{ $plandeformacion->ejecutadas}}</td>
                    <td>{{ $plandeformacion->ejecutadas_ambiente}}</td>
                    <td>{{ $plandeformacion->date_ambiente}}</td>
                    <td>{{ $plandeformacion->ejecutadas_seguridad}}</td>
                    <td>{{ $plandeformacion->date_seguridad}}</td>
                    <td>{{ $plandeformacion->ejecutadas_salud}}</td>
                    <td>{{ $plandeformacion->date_salud}}</td>



                    <td>
                        <a href="{{ route('plandeformacion.show', $plandeformacion->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('plandeformacion.destroy', $plandeformacion->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('plandeformacion.edit', $plandeformacion->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
