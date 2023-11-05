@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">Manejo del Cambio
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('manejo.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>
    <div class="card-body table table-striped-columns text-center">
        <table class="table mt-3" id="manejos">

            <thead>
                <tr>
                    <th class="text-center">Observación</th>
                    <th class="text-center">Fecha</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($manejo as $clave => $manejo)
                <tr>
                    <td>{{ $manejo->observacion}}</td>
                    <td>
                        <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#indicadorplan{{$clave}}" aria-expanded="false">
                            Fechas <i class="fas fa-angle-down"></i>
                        </button>
                        <div class="collapse" id="indicadorplan{{$clave}}">
                            <div class="card card-body">
                                @foreach ($manejo->date as $date)
                                <div><b>Manejo del cambio:</b> {{$date->name}}</div>
                                <div><b>Fecha:</b> {{ObtenerMes($date->date)}}</div>
                                <div><b>Estado:</b> {{$date->status}}</div>
                                @endforeach
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    DataTabla('#manejos', [1, 'desc']);
</script>
@endsection