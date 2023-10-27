@extends('base')
@section('title', 'Inicio')
@section('content')

@if (!empty($indicadorplan))
<div class="row">
@foreach ($indicadorplan as $plan)
    @foreach ($plan->date as $plan_)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{{$plan_->status}} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-{{$plan_->status}} text-uppercase mb-1">
                            Visitas Gerenciales Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Ubicación: {{$plan_->name}}</h6>
                            <h6>Fecha: {{(ObtenerMes($plan_->date))}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endforeach
</div>
@endif

<div class="card">
    <h2 class="card-header">
        Simulacro
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('simulacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>

    </h2>
    <div class="card-body">
        <div class="table table-striped-columns ">
            <table class="table mt-3 table table-striped-columns" id="simulacion">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Date</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $t = 0;
                    ?>
                    @foreach ($simulacion as $simulacion)
                    <tr>
                    
                        <td>{{ $simulacion->name }}</td>
                        <td>{{ $simulacion->date}}</td>
                        <td>
                            <a href="{{ route('simulacion.show', $simulacion->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('simulacion.destroy', $simulacion->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('simulacion.edit', $simulacion->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>

                        </td>
                    </tr>
                    <?php  $t = $t + $simulacion->t;
                ?>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Modelo de Grafica para el indicador Simulacro
    </p>
</figure>
<script>
    DataTabla('#simulacion', [3, 'desc']);
</script>
<script>
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Simulacro',
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
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Cumplido',
                y: <?php echo  $t;?>
            }, {
            
            }]
        }]
    });
</script>
@endsection