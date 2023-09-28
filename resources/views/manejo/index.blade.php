@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Reporte de Manejo del Cambio</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('manejo.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('manejo.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns">
    <table class="table mt-3" id="manejo">

        <thead>
            <tr>
                <th>ID</th>
                <th>nombre del Manejo al Cambio</th>
                <th>Observacion</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($manejo as $manejo)
            
            <tr>
                <td>{{ $manejo->id }}</td>
                <td>{{ $manejo->name}}</td>
                <td>{{ $manejo->observacion}}</td>
                <td>{{ $manejo->date}}</td>
                
            
                <td>
                    <a href="{{ route('manejo.show', $manejo->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('manejo.destroy', $manejo->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('manejo.edit', $manejo->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#manejo',[4, 'desc']);
</script>
    @endsection
