@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Investigacion de Incidentes
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('investigacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>

        </a>
    </h2>
    <div class="card-body">
        <div class=" table table-striped-columns text-center">
            <table class="table mt-3" id="investigacion">
                <thead>
                    <tr>
                       
                        <th>Estado</th>
                        <th>Unidad Funcional</th>
                        <th>Nombre Del incidente</th>
                        <th>Ubicación</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($investigaciones as $investigacion)
                    <tr>
                    
                        <td>{{ $investigacion->status}}</td>
                        <td>{{ $investigacion->uf->des_depart}}</td>
                        <td>{{ $investigacion->nombre_incidente}}</td>
                        <td>{{ $investigacion->nombre_lugar}}</td>
                        <td>{{ $investigacion->date}}</td>


                        <td>
                            <a href="{{ route('investigacion.show', $investigacion->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('investigacion.destroy', $investigacion->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <!-- <a href="{{ route('investigacion.edit', $investigacion->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a> -->

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    DataTabla('#investigacion', [5, 'desc']);
</script>
@endsection