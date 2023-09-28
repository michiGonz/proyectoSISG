@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Reporte de Aprendiendo en el Trabajo </h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('aprendiendo.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('aprendiendo.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns">
    <table class="table mt-3" id="aprendiendo">

        <thead>
            <tr>
                <th>ID</th>
                <th>Cant de Aprendiendo en el Trabajo</th>
                <th>Nombre de Aprendiendo en el Trabajo</th>
                <th>Observacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($aprendiendo as $aprendiendo)
            
            <tr>
                <td>{{ $aprendiendo->id }}</td>
                <td>{{ $aprendiendo->cantidad_actividad }}</td>
                <td>{{ $aprendiendo->nombre }}</td>
                <td>{{ $aprendiendo->observacion}}</td>
                <td>{{ $aprendiendo->date}}</td>
                
                <td>
                    <a href="{{ route('aprendiendo.show', $aprendiendo->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('aprendiendo.destroy', $aprendiendo->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('aprendiendo.edit', $aprendiendo->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#aprendiendo',[4, 'desc']);
</script>
    @endsection
