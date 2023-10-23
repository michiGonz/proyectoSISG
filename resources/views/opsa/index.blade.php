@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        OPSA
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('opsa.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table tabble-responsive">
            <table class="table mt-3" id="opsa">
                <thead>
                    <tr>
                        <th>Total</th>
                        <th>Tarjetas Seguras</th>
                        <th>Tarjetas Inseguras</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $cantidad_seguro = 0;
                    $cantidad_inseguro = 0;
                    $total = 0;
                    ?>
                    @foreach ($opsa as $opsa)
                    <tr>
                        <td>{{ $opsa->cantidad_seguro + $opsa->cantidad_inseguro}}</td>
                        <td>{{ $opsa->cantidad_seguro}}</td>
                        <td>{{ $opsa->cantidad_inseguro}}</td>
                        <td>{{ $opsa->date}}</td>
                        <td>

                            <a href="{{ route('opsa.show', $opsa->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('opsa.edit', $opsa->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('opsa.edit', $opsa->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                    if(substr($opsa->date,0,4)==date('Y')){
                    $cantidad_seguro = $cantidad_seguro + $opsa->cantidad_seguro;
                    $cantidad_inseguro = $cantidad_inseguro + $opsa->cantidad_inseguro;
                    $total = $cantidad_seguro + $cantidad_inseguro;
                    }
                    ?>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{$total}}</th>
                        <th>{{$cantidad_seguro}}</th>
                        <th>{{$cantidad_inseguro}}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script>
            DataTabla('#opsa', [2, 'desc']);
        </script>
    </div>
</div>
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
                Grafica de OPSA
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
            text: 'OPSA <?php echo date('Y')?>',
            align: 'left'
        },

        xAxis: {
            categories: ['OPSA']
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
                name: 'Actos Seguros',
                data: [<?php echo $cantidad_seguro; ?>],
                stack: 'cantidad_seguro'
            },
            {
                name: 'Actos Inseguro',
                data: [<?php echo $cantidad_inseguro; ?>],
                stack: 'cantidad_inseguro'
            }
            
        ]
    });
</script>
@endsection