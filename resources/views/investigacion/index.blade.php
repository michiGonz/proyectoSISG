@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2> Reporte de Investigacion de incidentes</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('investigacion.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('investigacion.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>
<div class=" table table-striped-columns table-secondary ">
    <table class="table mt-3"  id="investigacion">

        <thead>
            <tr>
                <th>ID</th>
                <th>acomulado</th>
                <th>Unidad Funcional</th>
                <th>Nombre Del incidente</th>
                <th>Ubicacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($investigacion as $investigacion)
                <tr>
                    <td>{{ $investigacion->id }}</td>
                    <td>{{ $investigacion->acomulado}}</td>
                    <td>{{ $investigacion->uf}}</td>
                    <td>{{ $investigacion->nombre_incidente}}</td>
                    <td>{{ $investigacion->nombre_lugar}}</td>
                    <td>{{ $investigacion->date}}</td>
                   

                    <td>
                        <a href="{{ route('investigacion.show', $investigacion->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('investigacion.destroy', $investigacion->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('investigacion.edit', $investigacion->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
    DataTabla('#investigacion',[5, 'desc']);
</script>
@endsection