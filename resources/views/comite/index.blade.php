@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container ">
    <h1>Comite de Seguridad Salud y Ambiente</h1>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('comite.create') }}"><span>Crear Reporte</span></a></td>

    </tbody>
</div>

<div class="table table-striped-columns table-secondary ">
    <table class="table mt-3 table table-striped-columns table-secondary">

        <thead>
            <tr>
                <th>ID</th>
                <th>Ejecutados</th>
                <th>Date</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comite as $comite)
                <tr>
                    <td>{{ $comite->id }}</td>
                    <td>{{ $comite->ejecutadas }}</td>
                    <td>{{ $comite->date}}</td>
                    <td>
                        <a href="{{ route('comite.show', $comite->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                        <form action="{{ route('comite.destroy', $comite->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('comite.edit', $comite->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
