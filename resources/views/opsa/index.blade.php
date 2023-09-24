@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h1>Indicadores de Quiriquire Gas SA</h1>


    <table class="table mt-3">

        <tr>
            <td><a class="nav-link" href="{{ route('actoseguro.index') }}"><span>OPSA actos seguros</span></a>
            </td>
            <td><a class="btn btn-success" href="{{ route('actoseguro.create') }}"><span>Agregar Acto
                        seguros</span></button></td>

        </tr>

        <tr>
            <td><a class="nav-link" href="{{ route('actoinseguro.index') }}"><span>OPSA actos inseguro</span></a>
            </td>
            <td><a class="btn btn-success" href="{{ route('actoinseguro.create') }}"><span>Agregar Reporte
                        OPSA Acto inseguro</span></button></td>
        </tr>

    </table>
</div>
@endsection
