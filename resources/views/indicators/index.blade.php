@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container- bg-light">
    <h2 class="text-center badge-dark border-bottom">INDICADORES QUIRIQUIRE GAS S.A</h2>
    
    <div class=" table table-striped-columns ">
        <table class="table">

            <tr>
                <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>Visita Gerencial</span></a>
                </td>
                <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('opsa.index') }}"><span>OPSA </span></a></td>
                <td><a class="btn btn-success" href="{{ route('opsa.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>Simulacro</span></a></td>
                <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('plandeformacion.index') }}"><span> Plan de Formacion Seguridad Salud y Ambiente</span></a></td>
                <td><a class="btn btn-success" href="{{ route('plandeformacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('auditorias.index') }}"><span> Auditorias de Los Permisos de Trabajo </span></a></td>
                <td><a class="btn btn-success" href="{{ route('auditorias.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('investigacion.index') }}"><span> Investigacion de Incidentes</span></a></td>
                <td><a class="btn btn-success" href="{{ route('investigacion.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('comite.index') }}"><span> Comite De Seguridad y Salud Laborales</span></a></td>
                <td><a class="btn btn-success" href="{{ route('comite.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('jornada.index') }}"><span> Jornada Ambiental</span></a></td>
                <td><a class="btn btn-success" href="{{ route('jornada.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('cultura.index') }}"><span> Cultura en Seguridad, Salud y Ambiente</span></a></td>
                <td><a class="btn btn-success" href="{{ route('cultura.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('aprendiendo.index') }}"><span> Aprendiendo en el Trabajo</span></a></td>
                <td><a class="btn btn-success" href="{{ route('aprendiendo.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('manejo.index') }}"><span>Manejo del Cambio</span></a></td>
                <td><a class="btn btn-success" href="{{ route('manejo.create') }}"><i class="fas fa-plus"></i></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('operativa.index') }}"><span>Eficiencia Operativa</span></a></td>
                <td><a class="btn btn-success" href="{{ route('operativa.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('parametros.index') }}"><span>Parametros Ambientales</span></a></td>
                <td><a class="btn btn-success" href="{{ route('parametros.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('monitoreos.index') }}"><span> Monitoreos Ambientales </span></a></td>
                <td><a class="btn btn-success" href="{{ route('monitoreos.create') }}"><i class="fas fa-plus"></i></a></td>
            </tr>

        </table>
    </div>

</div>

@endsection