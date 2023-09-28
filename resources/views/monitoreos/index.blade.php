@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Reporte de Monitoreos Ambientales</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('monitoreos.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('monitoreos.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns">
    <table class="table mt-3" id="monitoreos">

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
            @foreach ($monitoreos as $monitoreos)
            
            <tr>
                <td>{{ $monitoreos->id }}</td>
                <td>{{ $monitoreos->comite_cumplido}}</td>
                <td>{{ $monitoreos->observacion}}</td>
                <td>{{ $monitoreos->date}}</td>
                
            
                <td>
                    <a href="{{ route('monitoreos.show', $monitoreos->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('monitoreos.destroy', $monitoreos->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('monitoreos.edit', $monitoreos->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#monitoreos',[4, 'desc']);
</script>
    @endsection
