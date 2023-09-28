@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Visita Gerencial
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table tabble-responsive">
            <table class="table mt-3" id="table-ambiente">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar de Visita</th>
                        <th>Descripción</th>
                        <th>Acompanantes</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ambients as $ambient)
                    <tr>
                        <td>{{ $ambient->id }}</td>
                        <td>{{ $ambient->name }}</td>
                        <td>{{ $ambient->description }}</td>
                        <td>{{ $ambient->acompanantes}}</td>
                        <td>{{ $ambient->cantpersona}}</td>
                        <td>{{ $ambient->date }}</td>
                        <td>
                            <a href="{{ route('ambiente.show', $ambient->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                            <form action="{{ route('ambiente.destroy', $ambient->id) }}" method="POST" class="d-inline">
                                @csrf
                            </form>
                            <a href="{{ route('ambiente.edit', $ambient->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    DataTabla('#table-ambiente', [5, 'desc']);
</script>
@endsection