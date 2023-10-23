@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Reporte de Formacion Seguridad, Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('plandeformacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class=" table table-striped-columns  text-center">
            <table class="table mt-3" id="formacion">
                <thead>
                    <tr>
                   
                        <th>Formaciones en Ambiente</th>
                        <th>Formaciones en Seguridad</th>
                        <th>Formaciones en Salud</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plandeformacion as $plandeformacion)
                    <tr>
                    
                        <td>{{ $plandeformacion->ejecutadas_ambiente}}</td>
                        <td>{{ $plandeformacion->ejecutadas_seguridad}}</td>
                        <td>{{ $plandeformacion->ejecutadas_salud}}</td>
                        <td>
                            <a href="{{ route('plandeformacion.show', $plandeformacion->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                            <form action="{{ route('plandeformacion.destroy', $plandeformacion->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('plandeformacion.edit', $plandeformacion->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                DataTabla('#formacion', [3, 'desc']);
            </script>
            @endsection