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
                            {{$plan->dias}} {{$plan->dia}}<br>
                            {{$plan->cntd}} Charlas<br>
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
                            Planificadas
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
                            Realizadas
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
                        <th class="text-center">Formaciones en Ambiente</th>
                        <th class="text-center">Formaciones en Seguridad</th>
                        <th class="text-center">Formaciones en Salud</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ejecutadas_ambiente = 0;
                    $ejecutadas_seguridad = 0;
                    $ejecutadas_salud = 0;

                    ?>
                    @foreach ($plandeformacion as $clave => $plandeformacion)
                    <?php $dates = json_decode($plandeformacion->date); ?>
                    <tr>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_ambiente{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_ambiente}} <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="ejecutadas_ambiente{{$clave}}">
                                <div class="card card-body">
                                    @if ($dates->ambiente)
                                    @foreach ($dates->ambiente as $date)
                                    {{$date}}<br>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_seguridad{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_seguridad}} <i class="fas fa-angle-down"></i>
                            </button>
                            </button>
                            <div class="collapse" id="ejecutadas_seguridad{{$clave}}">
                                <div class="card card-body">
                                    @if ($dates->seguridad)
                                    @foreach ($dates->seguridad as $date)
                                    {{$date}}<br>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                        </td>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_salud{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_salud}} <i class="fas fa-angle-down"></i>
                            </button>
                            </button>
                            <div class="collapse" id="ejecutadas_salud{{$clave}}">
                                <div class="card card-body">
                                    @if ($dates->salud)
                                    @foreach ($dates->salud as $date)
                                    {{$date}}<br>
                                    @endforeach
                                    @endif
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
    DataTabla('#formacion', [4, 'desc']);
</script>


@endsection