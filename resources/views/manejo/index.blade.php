@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">Manejo del Cambio
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('manejo.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>
    <div class="card-body table table-striped-columns text-center">
        <table class="table mt-3" id="manejo">

            <thead>
                <tr>

                    <th>Nombre del Manejo al Cambio</th>
                    <th>Observacion</th>
                    <th>Fecha</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($manejo as $manejo)
                <tr>
                    <td>{{ $manejo->name}}</td>
                    <td>{{ $manejo->observación}}</td>
                    <td>{{ $manejo->date}}</td>
                    <td>
                        <a href="{{ route('manejo.show', $manejo->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                        <form action="{{ route('manejo.destroy', $manejo->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <!-- <a href="{{ route('manejo.edit', $manejo->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a> -->

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    DataTabla('#manejo', [4, 'desc']);
</script>
@endsection