@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="row">
    @foreach ($indicadorplan as $indicadorplan)
        @if ($indicadorplan->nombre_indicador=="visita_gerencial" && substr($indicadorplan->created_at,0,4) == date('Y'))
        <?php $fechas = json_decode($indicadorplan->date); $cumplido=[]; ?>
            @foreach ($fechas as $clave => $fecha)
                @foreach ($ambiente as $ambient)
                    @if (substr($ambient->date,0,7) == $fecha && substr($ambient->created_at,0,4) == date('Y'))
                        <?php  $cumplido[$clave]=true;?>
                    @endif
                @endforeach

                @if (isset($cumplido[$clave]))
                    <?php $color="success"; $mensaje="Cumplido";?>
                @else
                    <?php $color="danger"; $mensaje="Pendiente";?>
                @endif
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-<?php echo $color;?> shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ObtenerMes($fecha)?></div>
                                    <div class="text-xs font-weight-bold text-<?php echo $color;?> text-uppercase mb-1"><?php echo $mensaje;?></div>
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
    <h2 class="card-header">
        Visita Gerencial
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
        
    </h2>
    <div class="card-body">
        

        <div class="table tabble-responsive text-center">
            <table class="table mt-3 text center" id="table-ambiente">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar de Visita</th>
                        <th>Descripción</th>
                        <th>Acompanantes</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ambiente as $ambiente)
                    <tr>
                        <td>{{ $ambiente->id }}</td>
                        <td>{{ $ambiente->name }}</td>
                        <td>{{ $ambiente->description }}</td>
                        <td>{{ $ambiente->personal}}</td>
                        <td>{{ ObtenerFecha($ambiente->date) }}</td>
                        <td>
                            <a href="{{ route('ambiente.show', $ambiente->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
    
                            <form action="{{ route('ambiente.destroy', $ambiente->id) }}" method="POST" class="d-inline">
                                @csrf
                            </form>
                            <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.edit', $ambiente->id) }}" class="btn btn-success btn-sm" > <i class="fas fa-edit" ></i>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </select>
            </table>
        </div>
    </div>
</div>

<script>
    DataTabla('#table-ambiente', [4, 'desc']);
</script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Chart showing stacked columns with grouping, allowing specific series to
        be stacked on the same column. Stacking is often used to visualize
        data that accumulates to a sum.
    </p>
</figure>
<script>
    // Data retrieved from https://en.wikipedia.org/wiki/Winter_Olympic_Games
Highcharts.chart('container', {

chart: {
    type: 'column'
},

title: {
    text: 'Olympic Games all-time medal table, grouped by continent',
    align: 'left'
},

xAxis: {
    categories: ['Gold', 'Silver', 'Bronze']
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
    name: 'Norway',
    data: [148, 133, 124],
    stack: 'Europe'
}, {
    name: 'Germany',
    data: [102, 98, 65],
    stack: 'Europe'
}, {
    name: 'United States',
    data: [113, 122, 95],
    stack: 'North America'
}, {
    name: 'Canada',
    data: [77, 72, 80],
    stack: 'North America'
}]
});

</script>
@endsection
