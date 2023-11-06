@extends('base')
@section('title', 'Inicio')
@section('content')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{{$indicadorplan->status}} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-{{$indicadorplan->status}} text-uppercase mb-1">
                            Jornadas Ambientales Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Programación Anual: {{$indicadorplan->programacion_anual}}</h6>
                            <h6>Realizadas: {{$indicadorplan->realizadas}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endif

<div class="card">
    <h2 class="card-header">
        Aprendiendo en el Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('aprendiendo.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns text-center">
            <table class="table mt-3" id="aprendiendo">

                <thead>
                    <tr>

                        <th class="text-center">Cantidad de Aprendiendo en el Trabajo</th>
                        <th class="text-center">Observación</th>
                        <th class="text-center">Fecha</th>
                      

                    </tr>
                </thead>
                <tbody>
                    @foreach ($aprendiendo as $clave => $aprendiend)
                    <tr>
                        <td class="text-center"> {{ $aprendiend->cantidad_actividad }}</td>
                        <td class="text-center">{{ $aprendiend->observacion}}</td>
                        <td class="text-center">
                        <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#aprendiend{{$clave}}" aria-expanded="false">
                                Fechas <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="" id="aprendiend{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($aprendiend->date as $date)

                                    <div><b>Nombre:</b> {{$date->name}}</div>
                                    <div><b>Fecha:</b> {{$date->date}}</div><br>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    DataTabla('#aprendiendo', [2, 'desc']);
</script>
@endsection