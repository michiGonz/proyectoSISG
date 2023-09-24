@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2>Visita Gerencial</h2>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('ambiente.create') }}"><span>Crear Reporte</span></a></td>

    </tbody>
</div>


<div class="table tabble-responsive">


        <table class="table mt-3">
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
@endsection
