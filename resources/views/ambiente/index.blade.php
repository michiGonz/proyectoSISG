@extends('base')
@section('title', 'Inicio')
@section('content')
@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    @foreach ($indicadorplan->date as $plan)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{{$plan->status}} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-{{$plan->status}} text-uppercase mb-1">
                            Visitas Gerenciales Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Ubicación: {{$plan->name}}</h6>
                            <h6>Fecha: {{(ObtenerMes($plan->date))}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
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
                        <td>{{ $ambiente->name }}</td>
                        <td>{{ $ambiente->description }}</td>
                        <td>
                            @foreach ($ambiente->personal as $persona)
                                {{$persona}}<br>
                            @endforeach
                        </td>
                        <td>{{ ObtenerFecha($ambiente->date) }}</td>
                        <td>
                            <a href="{{ route('ambiente.show', $ambiente->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('ambiente.destroy', $ambiente->id) }}" method="POST" class="d-inline">
                                @csrf
                            </form>
                            <!-- <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.edit', $ambiente->id) }}" class="btn btn-success btn-sm"> <i class="fas fa-edit"></i> -->
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
@endsection