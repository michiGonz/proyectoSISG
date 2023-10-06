@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="row">
    <?php function ObtenerMes($fecha)
    {
        switch (substr($fecha, 5, 8)) {
            case '01':
                $mes = "Enero";
                break;
            case '02':
                $mes = "Febrero";
                break;
            case '03':
                $mes = "Marzo";
                break;
            case '04':
                $mes = "Abril";
                break;
            case '05':
                $mes = "Mayo";
                break;
            case '06':
                $mes = "Junio";
                break;
            case '07':
                $mes = "Julio";
                break;
            case '08':
                $mes = "Agosto";
                break;
            case '09':
                $mes = "Septiembre";
                break;
            case '10':
                $mes = "Octubre";
                break;
            case '11':
                $mes = "Noviembre";
                break;
            case '12':
                $mes = "Diciembre";
                break;
        }
        return $mes;
    } ?>
    @foreach ($indicadorplan as $indicadorplan)
    @if ($indicadorplan->nombre_indicador=="simulacro" && substr($indicadorplan->created_at,0,4) == date('Y'))
    <?php $fechas = json_decode($indicadorplan->date);
    $cumplido = []; ?>
    @foreach ($fechas as $clave => $fecha)
    @foreach ($simulacion as $simulacio)
    @if (substr($simulacio->date,0,7) == $fecha && substr($simulacio->created_at,0,4) == date('Y'))
    <?php $cumplido[$clave] = true; ?>
    @endif
    @endforeach

    @if (isset($cumplido[$clave]))
    <?php $color = "success";
    $mensaje = "Cumplido"; ?>
    @elseif (substr($fecha,5,8) == date('m'))
    <?php $color = "warning";
    $mensaje = "Pendiente"; ?>
    @elseif (substr($fecha,5,8) < date('m')) <?php $color = "danger";
                                                $mensaje = "Pasado"; ?> @else <?php $color = "primary";
                                                                                $mensaje = "Pendiente"; ?> @endif <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-<?php echo $color; ?> shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ObtenerMes($fecha); ?></div>
                        <div class="text-xs font-weight-bold text-<?php echo $color; ?> text-uppercase mb-1"><?php echo $mensaje; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-<?php echo $color; ?>"></i>
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
        Simulacro
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('simulacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>

    </h2>
    <div class="card-body">
        <div class="table table-striped-columns ">
            <table class="table mt-3 table table-striped-columns" id="simulacion">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Logrado</th>
                        <th>Nombre</th>
                        <th>Date</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $simulacro_cumplido=0; $simulacro_ejecutados=0;?>
                    @foreach ($simulacion as $simulacion)
                    <tr>
                        <td>{{ $simulacion->id }}</td>
                        <td>{{ $simulacion->simulacro_cumplido }}</td>
                        <td>{{ $simulacion->name }}</td>
                        <td>{{ $simulacion->date}}</td>
                        <td>
                            <a href="{{ route('simulacion.show', $simulacion->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                            <form action="{{ route('simulacion.destroy', $simulacion->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('simulacion.edit', $simulacion->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                        </td>
                    </tr>
                    <?php $simulacro_cumplido=$simulacro_cumplido+$simulacion->simulacro_cumplido;
                    $simulacro_cumplido=$simulacro_cumplido+$simulacion->simulacro_ejecutado;?>
                    @endforeach
                </tbody>
            </table>
            <script>
                DataTabla('#simulacion', [3, 'desc']);
            </script>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Planificados', 'ejecutados'],
      datasets: [{
        label: 'Simulacro',
        data: [<?php echo $simulacro_cumplido;?>, 10],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
    
       
            @endsection