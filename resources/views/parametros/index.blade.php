@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="row">
    @foreach ($indicadorplan as $indicadorplan)
    @if ($indicadorplan->nombre_indicador=="parametros_ambientales" && substr($indicadorplan->created_at,0,4) == date('Y'))
    <?php $fechas = json_decode($indicadorplan->date);
    $cumplido = []; ?>
    @foreach ($fechas as $clave => $fecha)
    @foreach ($parametros as $parametro)
    @if (substr($parametro->date,0,7) == $fecha && substr($parametro->created_at,0,4) == date('Y'))
    <?php $cumplido[$clave] = true; ?>
    @endif
    @endforeach

    @if (isset($cumplido[$clave]))
    <?php $color = "success";
    $mensaje = "Cumplido"; ?>
    @else
    <?php $color = "danger";
    $mensaje = "Pendiente"; ?>
    @endif
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-<?php echo $color; ?> shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ObtenerMes($fecha) ?></div>
                        <div class="text-xs font-weight-bold text-<?php echo $color; ?> text-uppercase mb-1"><?php echo $mensaje; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    @endforeach
</div>

<div class="card">
    <h2 class="card-header">Reporte de Parametros Ambientales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('parametros.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

    <div class=" card-body table table-striped-columns ">
        <table class="table mt-3" id="parametros">

            <thead>
                <tr>
                    <th>total</th>
                    <th>PROD</th>
                    <Th>MTTO</Th>
                    <th>SSGG</th>
                    <th>SC</th>
                    <th>CC</th>
                    <th>SSII</th>
                    <th>Fecha</th>
                    <th>Acciones</th>

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
                    <td>{{$parametros->total}}</td>
                    <td>{{ $parametros->PROD}}</td>
                    <td>{{ $parametros->MTTO}}</td>
                    <td>{{ $parametros->SSGG}}</td>
                    <td>{{ $parametros->SC}}</td>
                    <td>{{ $parametros->CC}}</td>
                    <td>{{ $parametros->SSII}}</td>
                    <td>{{ $parametros->date}}</td>



                    <td>
                        <a href="{{ route('parametros.show', $parametros->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                        <form action="{{ route('parametros.destroy', $parametros->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('parametros.edit', $parametros->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>

                    </td>
                </tr>
                <?php
                if (substr($parametros->date, 0, 4) == date('Y')) {
                    $PROD = $PROD + $parametros->PROD;
                    $MTTO = $MTTO + $parametros->MTTO;
                    $SSGG = $SSGG + $parametros->SSGG;
                    $SC = $SC + $parametros->SC;
                    $SC = $CC + $parametros->CC;
                    $SSII = $SSII + $parametros->SSII;
                    $total = $PROD + $MTTO + $SSGG + $SC + $CC + $SSII;
                }
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
                    } ,
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