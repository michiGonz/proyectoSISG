@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="row">
    @foreach ($indicadorplan as $indicadorplan)
        @if ($indicadorplan->nombre_indicador=="comite" && substr($indicadorplan->created_at,0,4) == date('Y'))
        <?php $fechas = json_decode($indicadorplan->date); $cumplido=[]; ?>
            @foreach ($fechas as $clave => $fecha)
                @foreach ($comite as $comites)
                    @if (substr($comites->date,0,7) == $fecha && substr($comites->created_at,0,4) == date('Y'))
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
       Comite de Seguridad Salud Laborales
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('comite.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

<div class="table table-striped-columns" >
    <table class="table mt-3 table table-striped-columns" id="comite">

        <thead>
            <tr>
               
                <th>Observacion</th>
                <th>Fecha de Reunion</th>
                <th>Fecha de Entrega al Insasel</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comite as $comite)
                <tr>
                 
                    <td>{{ $comite->observacion }}</td>
                    <td>{{ $comite->date_reunion}}</td>
                    <td>{{ $comite->date_insasel}}</td>
                    <td>
                        <a href="{{ route('comite.show', $comite->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                        <form action="{{ route('comite.destroy', $comite->id) }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                        <a href="{{ route('comite.edit', $comite->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>
                    </td>
                </tr>
            @endforeach
            </table>
        </tbody>
    <script>
        DataTabla('#comite', [3, 'desc']);
    </script>
@endsection
