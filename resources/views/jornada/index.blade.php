@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container ">
    <h1>Jornada Ambiental</h1>
    <tbody>
        <tr>
        <td><a class="btn btn-success" class="nav-link" href="{{ route('jornada.create') }}"><span>Crear Reporte</span></a></td>
    </tbody>
</div>

<div class="table table-striped-columns table-secondary ">
    <table class="table mt-3 table table-striped-columns table-secondary" id="jornada">

        <thead>
            <tr>
                <th>ID</th>
                <th>Jornadas Ejecutadas</th>
                <th>Descripcion</th>
                <th>Ubicacion</th>
                <th>Date</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($jornada as $jornada)
                <tr>
                    <td>{{ $jornada->id }}</td>
                    <td>{{ $jornada->jornadas_ejecutadas }}</td>
                    <td>{{ $jornada->descripcion }}</td>
                    <td>{{ $jornada->ubicacion }}</td>
                    <td>{{ $jornada->date}}</td>
                    <td>
                        <a href="{{ route('jornada.show', $jornada->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('jornada.destroy', $jornada->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('jornada.edit', $jornada->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
    DataTabla('#jornada',[4, 'desc']);
</script>
@endsection
