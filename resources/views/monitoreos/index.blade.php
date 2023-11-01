@extends('base')
@section('title', 'Inicio')
@section('content')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-text-uppercase mb-1">
                            Visitas Gerenciales Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Ruido: {{$indicadorplan->date->ruido}}</h6>
                            <h6>Agua: {{$indicadorplan->date->agua}}</h6>
                            <h6>Emisiones: {{$indicadorplan->date->emisiones}}</h6>
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
        Monitoreos Ambientales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('monitoreos.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">


        <div class="table tabble-responsive text-center">
            <table class="table mt-3 " id="monitoreos">

                <thead>
                    <tr>

                        <th>Ruido</th>
                        <th>Agua</th>
                        <th>Emisiones</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ruido = 0;
                    $agua = 0;
                    $emisiones = 0;
                    $ninguno = 0;
                    ?>
                    @foreach ($monitoreo as $monitoreos)

                    <tr>

                        <td>{{ $monitoreos->ruido}}</td>
                        <td>{{ $monitoreos->agua}}</td>
                        <td>{{ $monitoreos->emisiones}}</td>
                        <td>{{ $monitoreos->ninguno}}</td>
                        <td>{{ $monitoreos->date}}</td>
                        <td>
                            <a href="{{ route('monitoreos.show', $monitoreos->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('monitoreos.destroy', $monitoreos->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('monitoreos.edit', $monitoreos->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                    if (substr($monitoreos->date, 0, 4) == date('Y')) {
                        $ruido = $ruido + $monitoreos->ruido;
                        $agua = $agua + $monitoreos->agua;
                        $emisiones = $emisiones + $monitoreos->emisiones;
                        $ninguno=$ninguno + $monitoreos->ninguno;
                    }
                    ?>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center"><?php echo $ruido; ?></th>
                        <th class="text-center"><?php echo $agua; ?></th>
                        <th class="text-center"><?php echo $emisiones; ?></th>
                        <th class="text-center"><?php echo $ninguno; ?></th>
                        <th></th>
                        <th></th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    <script>
        DataTabla('#parametros', [7, 'desc']);
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <br>
    <div class="card">
        <div class="card-body">
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Grafica
                </p>
            </figure>
        </div>
    </div>
</div>
<script>
    Highcharts.chart('container', {

        chart: {
            type: 'column'
        },

        title: {
            text: 'Monitoreos Ambientales <?php echo date('M') ?>',
            align: 'left'
        },

        xAxis: {
            categories: ['Montioreos']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Count medals'
            }
        },

        tooltip: {
            format: '<b>{key}</b><br/>{series.name}: {y}<br/>' +
                'Total: {point.stackTotal}'
        },

        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },

        series: [{
                name: 'Ruido',
                data: [<?php echo $ruido; ?>],
                stack: 'ruido'
            },
            {
                name: 'Agua',
                data: [<?php echo $agua; ?>],
                stack: 'Agua'
            },
            {
                name: 'Servicios Generales',
                data: [<?php echo $emisiones; ?>],
                stack: 'Emisiones'
            },
            {
                name: 'Ninguno',
                data: [<?php echo $ninguno; ?>],
                stack: 'Ninguno'
            }

        ]

    });
</script>
@endsection