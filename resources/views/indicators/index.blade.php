@extends('base')

@section('title', 'Inicio')

@section('content')

    
     <div class="container">
    <h1>Indicadores de Quiriquire Gas SA</h1>

     
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>VISITA GERENCIAL</span></a></td>
                        <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><span>Agregar Reporte Visita Gerencial</span></button></td>
                    </tr>
                    <tr>
                        <td><a class="nav-link" href="{{ route('observacion.index') }}"><span>OPSA</span></a></td>
                        <td><a class="btn btn-success" href="{{ route('observacion.create') }}"><span>Agregar Reporte OPSA</span></button></td>
                    </tr>

                    <tr>
                        <td><a class="nav-link" href="{{ route('ambiente.index') }}"><span>SIMULACRO</span></a></td>
                        <td><a class="btn btn-success" href="{{ route('ambiente.create') }}"><span>Agregar Reporte Simulacro</span></button></td>
                    </tr>

            </tbody>
        </table>

    
@endsection