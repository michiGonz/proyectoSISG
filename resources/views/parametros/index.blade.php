@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="row">
    <?php function ObtenerMes($fecha){
        switch (substr($fecha,5,8)) {
            case '01': $mes = "Enero"; break;
            case '02': $mes = "Febrero"; break;
            case '03': $mes = "Marzo"; break;
            case '04': $mes = "Abril"; break;
            case '05': $mes = "Mayo"; break;
            case '06': $mes = "Junio"; break;
            case '07': $mes = "Julio"; break;
            case '08': $mes = "Agosto"; break;
            case '09': $mes = "Septiembre"; break;
            case '10': $mes = "Octubre"; break;
            case '11': $mes = "Noviembre"; break;
            case '12': $mes = "Diciembre"; break;
        }
        return $mes;
    }?>
    @foreach ($indicadorplan as $indicadorplan)
        @if ($indicadorplan->nombre_indicador=="parametros_ambientales" && substr($indicadorplan->created_at,0,4) == date('Y'))
        <?php $fechas = json_decode($indicadorplan->date); $cumplido=[]; ?>
            @foreach ($fechas as $clave => $fecha)
                @foreach ($parametros as $parametro)
                    @if (substr($parametro->date,0,7) == $fecha && substr($parametro->created_at,0,4) == date('Y'))
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
    <h2 class="card-header">Reporte de Parametros Ambientales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('parametros.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

<div class=" card-body table table-striped-columns">
    <table class="table mt-3" id="parametros">

        <thead>
            <tr>
                <th>ID</th>
                <th>Planificados</th>
                <th>Ejecutadas</th>
                <th>PROD</th>
               <Th>MTTO</Th> 
                <th>SSGG</th>
                <th>SC</th>
                <th>CC</th>
               <th>SSII</th>
                <th>Fecha</th>
                <th>Observacion</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($parametros as $parametros)
            
            <tr>
                <td>{{ $parametros->id }}</td>
                <td>{{ $parametros->planificado}}</td>
                <td>{{ $parametros->ejecutados}}</td>
                <td>{{ $parametros->PROD}}</td>
                <td>{{ $parametros->MTTO}}</td>
                <td>{{ $parametros->SSGG}}</td>
                <td>{{ $parametros->SC}}</td>
                <td>{{ $parametros->CC}}</td>
                <td>{{ $parametros->SSII}}</td>
                <td>{{ $parametros->date}}</td>
                <td>{{ $parametros->observacion}}</td>
            
            
                <td>
                    <a href="{{ route('parametros.show', $parametros->id) }}"
                    class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                    <form action="{{ route('parametros.destroy', $parametros->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('parametros.edit', $parametros->id) }}"
                    class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#parametros',[10, 'desc']);
</script>
    @endsection
