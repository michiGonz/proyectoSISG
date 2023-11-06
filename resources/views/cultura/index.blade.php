@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header ">
        Cultura En Seguridad Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('cultura.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns text-center">
            <table class="table mt-3 text-center" id="cultura">
                @csrf
                <thead>
                    <?php
                    $comite_cumplido = 0;
                    ?>
                    <tr>
                        <th class="text-center">Acciones Ejecutadas</th>
                        <th class="text-center">Observacion</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cultura as $cultura)
                    <tr>
                        <td class="text-center">{{ $cultura->comite_cumplido}}</td>
                        <td class="text-center">{{ $cultura->observacion}}</td>
                        <td class="text-center">{{ $cultura->date}}</td>
                        <td class="text-center">
                            <a href="{{ route('cultura.show', $cultura->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>

                        </td>
                    </tr>
                    <?php
                    $comite_cumplido = $comite_cumplido + $cultura->comite_cumplido
                    ?>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">{{$comite_cumplido}}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
    DataTabla('#cultura', [4, 'desc']);
</script>
@endsection