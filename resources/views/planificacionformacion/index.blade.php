@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Investigacion de Incidentes
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('planificacionformacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <div class="container">
            <table class="table mt-3" id="control">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Meta Anual</th>
                        <th>Meta Mensual</th>
                        <th>Programadas Ambiente</th>
                        <th>Programadas Salud</th>
                        <th>Programadas Seguridad</th>
                        <th>Fecha Planificada</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($planificacionformacion as $planificacionformacion)
                    <tr>
                        <td>{{ $planificacionformacion->id }}</td>
                        <td>{{ $planificacionformacion->programadas_anual}}</td>
                        <td>{{ $planificacionformacion->programadas_mensual }}</td>
                        <td>{{ $planificacionformacion->programadas_ambiente}}</td>
                        <td>{{ $planificacionformacion->programadas_salud}}</td>
                        <td>{{ $planificacionformacion->programadas_seguridad}}</td>
                        <td>{{ $planificacionformacion->date}}</td>

                        <td>
                            <a href="{{ route('planificacionformacion.show', $planificacionformacion->id) }}" class="btn btn-primary btn-sm">Planificacion</a>
                                @csrf

                            </form>
        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
    <script>
        DataTabla('#control', [7, 'desc']);
    </script>
    @endsection