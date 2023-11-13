@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container- bg-light">
    <h2 class="text-center badge-dark border-bottom"><b>INDICADORES QUIRIQUIRE GAS S.A</b></h2>
    
    <div class=" table table-striped-columns ">
        <table class="table">

            <tr>
                <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span><b>Visita Gerencial</b></span></a>
                </td>
                <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('opsa.index') }}"><span><b>Observaciones Preventivas</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('opsa.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span><b>Simulacro</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('plandeformacion.index') }}"><span><b>Plan de Formación Seguridad Salud y Ambiente</b> </span></a></td>
                <td><a class="btn btn-success" href="{{ route('plandeformacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('auditorias.index') }}"><span><b> Auditorias de Los Permisos de Trabajo </b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('auditorias.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('investigacion.index') }}"><span><b>Investigación de Incidentes</b> </span></a></td>
                <td><a class="btn btn-success" href="{{ route('investigacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('comite.index') }}"><span><b>Comité De Seguridad y Salud Laborales</b> </span></a></td>
                <td><a class="btn btn-success" href="{{ route('comite.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('jornada.index') }}"><span><b>Jornada Ambiental</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('jornada.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('cultura.index') }}"><span><b> Cultura en Seguridad, Salud y Ambiente</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('cultura.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('aprendiendo.index') }}"><span><b>Aprendiendo en el Trabajo</b> </span></a></td>
                <td><a class="btn btn-success" href="{{ route('aprendiendo.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('manejo.index') }}"><span><b>Manejo del Cambio</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('manejo.create') }}"><i class="fas fa-plus"></i></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('operativa.index') }}"><span><b>Eficiencia Operativa</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('operativa.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('parametros.index') }}"><span><b>Parámetros Ambientales</b></span></a></td>
                <td><a class="btn btn-success" href="{{ route('parametros.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('monitoreos.index') }}"><span><b>Monitoréos Ambientales </b> </span></a></td>
                <td><a class="btn btn-success" href="{{ route('monitoreos.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

        </table>
    </div>

</div>

@endsection