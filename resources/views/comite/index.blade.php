@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Comité de Seguridad Salud Laborales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('comite.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table table-striped-columns">
            <table class="table mt-3 table table-striped-columns" id="comite">

                <thead>
                    <tr>

                        <th>Observacion</th>
                        <th>Fecha de Reunion</th>
                        <th>Fecha de Entrega al Inpsasel</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comite as $comite)
                    <tr>

                        <td>{{ $comite->observacion }}</td>
                        <td>{{ $comite->date_reunion}}</td>
                        <td>{{ $comite->date_insasel}}</td>
                        <td>
                            <a href="{{ route('comite.show', $comite->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('comite.destroy', $comite->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('comite.edit', $comite->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
            </table>
           
        </div>
    </div>
</div>
<script>
    DataTabla('#comite', [3, 'desc']);
</script>
@endsection