@extends('base')
@section('title', 'Inicio')
@section('content')



@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    @foreach ($indicadorplan->date as $plan)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{{$plan->status}} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-{{$plan->status}} text-uppercase mb-1">
                            Comité Planificado</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Fecha reunion: {{(ObtenerFecha($plan->reunion))}}</h6>
                            <h6>Fecha Entrega: {{(ObtenerFecha($plan->entrega))}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endif

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

                        <th>Observación</th>
                        <th>Fecha de Reunión</th>
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
                            <!-- <a href="{{ route('comite.edit', $comite->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a> -->
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