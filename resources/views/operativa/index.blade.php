@extends('base')
@section('title', 'Inicio')
@section('content')



<div class="card">
    <h2 class="card-header">
      Eficiencia Operativa
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('operativa.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns text-center">
            <table class="table mt-3" id="aprendiendo">

                <thead>
                    <tr>

                        <th>Cantidad de Aprendiendo en el Trabajo</th>
                        <th>Observación</th>
                        <th>Fecha</th>
                      

                    </tr>
                </thead>
                <tbody>
                    @foreach ($operativa as $clave => $operativ)
                    <tr>
                        <td>{{ $operativ->acciones_pendientes }}</td>
                        <td>{{ $operativ->observacion}}</td>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#operativa{{$clave}}" aria-expanded="false">
                               Datos <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="operativa{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($operativ->date as $date)

                                    <div><b>Nombre:</b> {{$date->name}}</div>
                                    <div><b>Fecha:</b> {{$date->date}}</div><br>
                                 
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
</div>
<script>
    DataTabla('#operativa', [4, 'desc']);
</script>
@endsection