@extends('base')
@section('title', 'Inicio')
@section('content')

<?php var_dump($indicadorplan)?>

<div class="card">
    <h2 class="card-header">Auditorias de Permiso de Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('auditorias.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

    <div class="card-body table table-striped-columns text-center">
        <table class="table mt-3" id="auditoria">
            <thead>
                <tr>

                    <th>Permisos Generados</th>
                    <th>Permisos Generados QQGAS</th>
                    <th>Permisos Generados PDVSA</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_permisos = 0;
                $permisos_generadosqqg = 0;
                $permisos_generadospdvsa = 0;
                ?>
                @foreach ($auditorias as $auditorias)
                <tr>
                    <td>{{ $auditorias->permisos_generadosqqg  + $auditorias->permisos_generadospdvsa}}</td>
                    <td>{{ $auditorias->permisos_generadosqqg}}</td>
                    <td>{{ $auditorias->permisos_generadospdvsa}}</td>
                    <td>{{ $auditorias->date}}</td>
                    <td>
                        <a href="{{ route('auditorias.show', $auditorias->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                        <form action="{{ route('auditorias.destroy', $auditorias->id) }}" method="POST" class="d-inline">
                            @csrf
                        </form>
                        <a href="{{ route('auditorias.edit', $auditorias->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <?php
                if (substr($auditorias->date, 0, 4) == date('Y')) {
                    $permisos_generadosqqg = $permisos_generadosqqg + $auditorias->permisos_generadosqqg;
                    $permisos_generadospdvsa = $permisos_generadospdvsa + $auditorias->permisos_generadospdvsa;
                    $total_permisos = $permisos_generadosqqg + $permisos_generadospdvsa;
                }
                ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center"><?php echo $total_permisos; ?></th>
                    <th class="text-center"><?php echo $permisos_generadosqqg; ?></th>
                    <th class="text-center"><?php echo $permisos_generadospdvsa; ?></th>
                 
                </tr>
            </tfoot>
        </table>
    </div>
    <script>
        DataTabla('#auditoria', [4, 'desc']);
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            All color options in Highcharts can be defined as gradients or patterns.
            In this chart, a gradient fill is used for decorative effect in a pie
            chart.
        </p>
    </figure>
   <script>
    Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Auditorias de permisos de trabajo <?php echo date('Y')?>',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            { name: 'Total de Permisos', y: <?php echo $total_permisos?>},
            { name: 'Total de QQGAS', y: <?php echo  $permisos_generadosqqg?>},
            { name: 'Total de PDVSA', y: <?php echo $permisos_generadospdvsa ?>},
          
        ]
    }]
});

   </script>
    @endsection