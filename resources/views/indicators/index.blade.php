@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h1>Indicadores de Quiriquire Gas SA</h1>


    <div class=" table table-striped-columns ">
        <table class="table">

            <tr>
                <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>Visita Gerencial</span></a>
                </td>
                <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><span>Visita Gerencial</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('opsa.index') }}"><span>OPSA </span></a>
                </td>

            </tr>


            <tr>
                <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>Simulacro</span></a></td>
                <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>
                            Simulacro</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('plandeformacion.index') }}"><span> Plan de Formacion Seguridad
                            Salud y Ambiente</span></a></td>
                <td><a class="btn btn-success" href="{{ route('plandeformacion.create') }}"><span>
                            Plan de Formacion </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('auditorias.index') }}"><span> Auditorias de Los Permisos de Trabajo </span></a></td>
                <td><a class="btn btn-success" href="{{ route('auditorias.create') }}"><span>Auditorias de los Permisos de Trabajo </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('investigacion.index') }}"><span> Investigacion de Incidentes</span></a></td>
                <td><a class="btn btn-success" href="{{ route('investigacion.create') }}"><span>Permisos de trabajo </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('comite.index') }}"><span> Comite De Seguridad y Salud Laborales</span></a></td>
                <td><a class="btn btn-success" href="{{ route('comite.create') }}"><span>Comite Seguridad y Salud Laborales </span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('jornada.index') }}"><span> Jornada Ambiental</span></a></td>
                <td><a class="btn btn-success" href="{{ route('jornada.create') }}"><span> Jornada Ambiental</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('cultura.index') }}"><span> Cultura en Seguridad</span></a></td>
                <td><a class="btn btn-success" href="{{ route('cultura.create') }}"><span>Cultura en Seguridad</span></button></td>
            </tr>
            
            <tr>
                <td><a class="nav-link" href="{{ route('aprendiendo.index') }}"><span> Aprendiendo en el Trabajo</span></a></td>
                <td><a class="btn btn-success" href="{{ route('aprendiendo.create') }}"><span>Aprendiendo en el Trabajo</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('manejo.index') }}"><span>Manejo del Cambio</span></a></td>
                <td><a class="btn btn-success" href="{{ route('manejo.create') }}"><span>Manejo del Cambio</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('operativa.index') }}"><span>Eficiencia Operativa</span></a></td>
                <td><a class="btn btn-success" href="{{ route('operativa.create') }}"><span>Eficiencia Operativa</span></button></td>
            </tr>

            <tr>
                <td><a class="nav-link" href="{{ route('parametros.index') }}"><span>Parametros Ambientales</span></a></td>
                <td><a class="btn btn-success" href="{{ route('parametros.create') }}"><span>Parametros Ambientales</span></button></td>
            </tr>

            
            <tr>
                <td><a class="nav-link" href="{{ route('parametros.index') }}"><span>construccion Monitoreos Ambientales </span></a></td>
                <td><a class="btn btn-success" href="{{ route('parametros.create') }}"><span>Parametros Ambientales</span></button></td>
            </tr>

        </table>
    </div>

</div>

@endsection
