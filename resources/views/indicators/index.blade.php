@extends('base')

@section('title', 'Inicio')

@section('content')


<div class="container">
    <h1>Indicadores de Quiriquire Gas SA</h1>


    <table class="table mt-3">

                    <tr>
                        <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>Visita Gerencial</span></a>
                        </td>
                        <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><span>Agregar Reporte
                                    Visita Gerencial</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('actoseguro.index') }}"><span>OPSA </span></a></td>
                        
                    </tr>


                    <tr>
                        <td><a class="nav-link" href="{{ route('actoseguro.index') }}"><span>OPSA actos seguros</span></a></td>
                        <td><a class="btn btn-success" href="{{ route('actoseguro.create') }}"><span>Agregar Reporte
                                    OPSA Actos seguros</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('actoinseguro.index') }}"><span>OPSA actos inseguro</span></a>
                        </td>
                        <td><a class="btn btn-success" href="{{ route('actoinseguro.create') }}"><span>Agregar Reporte
                                    OPSA Acto inseguro</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>SIMULACRO</span></a></td>
                        <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>Agregar Reporte
                                    Simulacro</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span> PLAN DE FORMACIÓN EN SEGURIDAD, SALUD Y AMBIENTE </span></a></td>
                        <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>Agregar Reporte
                            PLAN DE FORMACIÓN EN SEGURIDAD, SALUD Y AMBIENTE </span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>AUDITORIAS A LOS PERMISOS DE TRABAJO/span></a></td>
                        <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>Agregar Reporte AUDITORIAS A LOS PERMISOS DE TRABAJO</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('simulacion.index') }}"><span>  COMITÉ DE SEGURIDAD Y SALUD LABORALES </span></a></td>
                        <td><a class="btn btn-success" href="{{ route('simulacion.create') }}"><span>Agregar Reporte
                            COMITÉ DE SEGURIDAD Y SALUD LABORALES </span></button></td>
                    </tr>

                </tbody>
            </table>


            @endsection
