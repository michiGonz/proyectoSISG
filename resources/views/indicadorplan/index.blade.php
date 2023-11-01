@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Planificación de Indicadores
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('indicadorplan.create') }}"><span> <i class="fas fa-plus"></i> Crear Plan</span></a>
    </h2>
    <div class="card-body">

        <div class="table table-striped-columns text-center">
            <table class="table mt-3" id="indicador text-center">

                <thead>
                    <tr>
                        <th>Indicador</th>
                        <th>Programación Anual</th>
                        <th>Programación Mensual</th>
                        <th>Fecha Planificada</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($indicadorplanes as $clave => $indicadorplan)
                    <tr>
                        <td>{{ $indicadorplan->nombre}}</td>
                        <td>{{ $indicadorplan->programacion_anual}}</td>
                        <td>{{ $indicadorplan->programadas_mes}}</td>
                        <td>
                            @if ($indicadorplan->nombre_indicador == 'opsa')

                            @elseif ($indicadorplan->nombre_indicador == 'simulacro')
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#indicadorplan{{$clave}}" aria-expanded="false">
                                Fechas <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="indicadorplan{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($indicadorplan->date as $date)
                                    <div><b>Nombre:</b> {{$date->name}}</div>
                                    <div><b>Fecha:</b> {{$date->date}}</div><br>
                                    @endforeach
                                </div>
                            </div>
                            @elseif ($indicadorplan->nombre_indicador == 'comite')
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#indicadorplan{{$clave}}" aria-expanded="false">
                                Fechas <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="indicadorplan{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($indicadorplan->date as $date)
                                    <div><b>Reunion:</b> {{$date->reunion}}</div>
                                    <div><b>Entrega al Inpsasel:</b> {{$date->entrega}}</div><br>
                                    @endforeach
                                </div>
                            </div>
                            @elseif ($indicadorplan->nombre_indicador == 'plan' )
                            <b>{{$indicadorplan->date->dia_}}
                            </b>
                            @elseif ($indicadorplan->nombre_indicador == 'visita')
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#indicadorplan{{$clave}}" aria-expanded="false">
                                Fechas <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="indicadorplan{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($indicadorplan->date as $date)
                                    <div><b>Lugar de la Visita:</b> {{$date->name}}</div>
                                    <div><b>Fecha:</b> {{$date->date}}</div><br>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                        </td>
                      
                    </tr>
                    @endforeach
            </table>

        </div>
    </div>
</div>
<script>
    DataTabla('#indicador', [3, 'desc']);
</script>
@endsection