@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h1>Indicadores de Quiriquire Gas SA</h1>


    <div class=" table table-striped-columns table-secondary ">
        <table class="  table-secondary">

            <tr>
                <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>Visita Gerencial</span></a>
                </td>
                <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><span>Agregar Reporte
                            Visita Gerencial</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('opsa.index') }}"><span>OPSA </span></a>
                </td>

            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>Simulacro</span></a></td>
                <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>Agregar Reporte
                            Simulacro</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('plandeformacion.index') }}"><span> Plan de Formacion Seguridad
                            Salud y Ambiente</span></a></td>
                <td><a class="btn btn-success" href="{{ route('plandeformacion.create') }}"><span>Agregar Reporte
                            Plan de Formacion </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('auditorias.index') }}"><span> Auditorias de Los Permisos de Trabajo </span></a></td>
                <td><a class="btn btn-success" href="{{ route('auditorias.create') }}"><span>Agregar Reporte
                            de permisos de trabajo </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('investigacion.index') }}"><span> Investigacion de Incidentes</span></a></td>
                <td><a class="btn btn-success" href="{{ route('investigacion.create') }}"><span>Agregar Reporte
                            de permisos de trabajo </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('comite.index') }}"><span> Comite De Seguridad y Salud Laborales</span></a></td>
                <td><a class="btn btn-success" href="{{ route('comite.create') }}"><span>Agregar Reporte de Comite Seguridad y Salud Laborales </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('jornada.index') }}"><span> Jornada Ambiental</span></a></td>
                <td><a class="btn btn-success" href="{{ route('jornada.create') }}"><span>Agregar Reporte de Jornada Ambiental</span></button></td>
            </tr>

        </table>
    </div>

</div>

@endsection
