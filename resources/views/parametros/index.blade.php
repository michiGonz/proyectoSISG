@extends('base')
@section('title', 'Inicio')
@section('content')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    @foreach ($indicadorplan->date as $clave => $plan)
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left- shadow h-100 py-2">
            <div class="card-body" style="padding: 0px 15px;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="font-weight-bold text- text-uppercase mb-1">
                            @switch($clave)
                                @case('PROD') Producción @break
                                @case('MTTO') Mantenimiento @break
                                @case('SG') Servicio generales @break
                                @case('CC') Compras y contratos @break
                                @case('SSII') Sistemas de información @break
                                @case('SC') Seguridad corporativa @break
                            @endswitch
                            <b class="float-right"><i class="fas fa-hashtag fa-sm"></i>{{count($plan)}}</b>
                        </div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            @foreach ($plan as $clave => $name)
                            <h6><i class="fas fa-minus fa-sm"></i> {{$name}}</h6>
                            @endforeach
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
    <h2 class="card-header">Reporte de Parametros Ambientales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('parametros.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

    <div class=" card-body table table-striped-columns ">
        <table class="table mt-3" id="parametros">

            <thead>
                <tr>
                    <th>Total</th>
                    <th>PROD</th>
                    <Th>MTTO</Th>
                    <th>SSGG</th>
                    <th>SC</th>
                    <th>CC</th>
                    <th>SSII</th>
                    <th>Fecha</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $PROD = 0;
                $MTTO = 0;
                $SSGG = 0;
                $SC = 0;
                $CC = 0;
                $SSII = 0;
                ?>
                @foreach ($parametros as $parametros)

                <tr>
                    <td>{{$total_ = (count($parametros->PROD)+count($parametros->MTTO)+count($parametros->SSGG)+count($parametros->SC)+count($parametros->CC)+count($parametros->SSII))}}</td>
                    <td>{{ count($parametros->PROD)}}</td>
                    <td>{{ count($parametros->MTTO)}}</td>
                    <td>{{ count($parametros->SSGG)}}</td>
                    <td>{{ count($parametros->SC)}}</td>
                    <td>{{ count($parametros->CC)}}</td>
                    <td>{{ count($parametros->SSII)}}</td>
                    <td>{{ $parametros->date}}</td>
                </tr>
                <?php
                $total += $total_;
                $PROD += count($parametros['PROD']);
                $MTTO += count($parametros['MTTO']);
                $SSGG += count($parametros['SSGG']);
                $SC += count($parametros['SC']);
                $CC += count($parametros['CC']);
                $SSII += count($parametros['SSII']);
                ?>
                @endforeach
            <tfoot>
                <tr>
                    <th>{{$total}}</th>
                    <th>{{$PROD}}</th>
                    <th>{{$MTTO}}</th>
                    <th>{{$SSGG}}</th>
                    <th>{{$SC}}</th>
                    <th>{{$CC}}</th>
                    <th>{{$SSII}}</th>
                    <td></td>


                </tr>
            </tfoot>
            </tbody>
        </table>
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
</div>

<script>
    Highcharts.chart('container', {

        chart: {
            type: 'column'
        },

        title: {
            text: 'Parametros <?php echo date('Y') ?>',
            align: 'left'
        },

        xAxis: {
            categories: ['UF']
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
                name: 'Total',
                data: [<?php echo $total; ?>],
                stack: 'total'
            }, {
                name: 'Mantenimiento',
                data: [<?php echo $MTTO; ?>],
                stack: 'MTTO'
            },
            {
                name: 'Produccion',
                data: [<?php echo $PROD; ?>],
                stack: 'PROD'
            },
            {
                name: 'Servicios Generales',
                data: [<?php echo $SSGG; ?>],
                stack: 'SSGG'
            },
            {
                name: 'seguridad corporativa',
                data: [<?php echo $SC; ?>],
                stack: 'SC'
            },
            {
                name: 'compra y contratacion',
                data: [<?php echo $CC; ?>],
                stack: 'CC'
            },
            {
                name: 'sistemas de informacion',
                data: [<?php echo $SSII; ?>],
                stack: 'SSII'
            }
        ]

    });
</script>
@endsection