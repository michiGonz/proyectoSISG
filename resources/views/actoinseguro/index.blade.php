@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Acto Inseguro
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('actoinseguro.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>
    <div class="card-body table table-striped-columns ">
        <table class="table mt-3" id="acto-inseguro">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Observaciones</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($actoinseguro as $actoinseguro)
                <tr>
                    <td>{{ $actoinseguro->id }}</td>
                    <td>{{ $actoinseguro->observacion }}</td>
                    <td>{{ $actoinseguro->date }}</td>

                    <td>
                        <a href="{{ route('actoinseguro.show', $actoinseguro->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                        <form action="{{ route('actoinseguro.destroy', $actoinseguro->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('actoinseguro.edit', $actoinseguro->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    DataTabla('#acto-inseguro', [3, 'desc']);
    </script>
@endsection