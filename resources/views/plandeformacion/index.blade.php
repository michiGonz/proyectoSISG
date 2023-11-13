@extends('base')
@section('title', 'Inicio')
@section('content')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    @foreach ($indicadorplan->date->meses as $mes => $plan)
    <div class="col-md-2 mb-3">
        <div class="card border-left-{{$plan->status}} shadow h-100 py-2">
            <div class="card-body" style="padding: 0px 15px;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="font-weight-bold text-{{$plan->status}} text-uppercase mb-1">
                            {{$plan->mes}}
                        </div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800 text-center">

                            {{$plan->cntd}} Programadas<br>
                            {{$plan->realizadas}} Realizadas<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-6 mb-3">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body" style="padding: 0px 15px;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="font-weight-bold text-info text-uppercase mb-1">
                            Planificadas Anual
                        </div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            {{$indicadorplan->date->planificadas}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body" style="padding: 0px 15px;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="font-weight-bold text-info text-uppercase mb-1">
                            Total Acomuladas
                        </div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            {{$indicadorplan->date->realizadas}}
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
        Reporte de Formación Seguridad, Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('plandeformacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class=" table table-striped-columns  text-center">
            <table class="table mt-3 text-center" id="formacion">
                <thead>
                    <tr>
                        <th class="text-center">Mes</th>
                        <th class="text-center">Formaciones en Ambiente</th>
                        <th class="text-center">Formaciones en Seguridad</th>
                        <th class="text-center">Formaciones en Salud</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ejecutadas_ambiente = 0;
                    $ejecutadas_seguridad = 0;
                    $ejecutadas_salud = 0;

                    ?>
                    @foreach ($plandeformacion as $clave => $plandeformacion)
                    <tr>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar{{$clave}}" aria-expanded="false">
                                Mes <i class="fas fa-angle-down"></i>
                            </button>
                        </td>
                        <td>
                           <b>{{ $plandeformacion->ejecutadas_ambiente}}</b> 
                            <div class="collapse" id="desplegar{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($plandeformacion->date['ambiente'] as $ambiente)
                                    {{$ambiente->name}}<br>
                                    {{ObtenerFecha($ambiente->date)}}<br>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                        <td>
                            <b>{{ $plandeformacion->ejecutadas_seguridad}}</b>
                            <div class="collapse" id="desplegar{{$clave}}">
                                <div class="card card-body">
        
                                </div>
                            </div>

                        </td>
                        <td>
                            <b>{{ $plandeformacion->ejecutadas_salud}}</b> 
                            <div class="collapse" id="desplegar{{$clave}}">
                                <div class="card card-body">
                                </div>
                            </div>
                        </td>
                        <td>{{$plandeformacion->ejecutadas_ambiente+$plandeformacion->ejecutadas_seguridad+$plandeformacion->ejecutadas_salud}}</td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    DataTabla('#formacion', [6, 'desc']);
</script>


@endsection