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
        

        <div class="table tabble-responsive">
            <table class="table mt-3" id="table-ambiente">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar de Visita</th>
                        <th>Descripción</th>
                        <th>Acompanantes</th>
                        <th>Cantidad</th>
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
                        <td>{{ $ambiente->acompanantes}}</td>
                        <td>{{ $ambiente->cantpersona}}</td>
                        <td>{{ $ambiente->date }}</td>
                        <td>
                            <a href="{{ route('ambiente.show', $ambiente->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
    
                            <form action="{{ route('ambiente.destroy', $ambiente->id) }}" method="POST" class="d-inline">
                                @csrf
                            </form>
                            <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.edit', $ambiente->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-edit" ></i></span></a>
                           
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
    DataTabla('#table-ambiente', [5, 'desc']);
</script>
@endsection
