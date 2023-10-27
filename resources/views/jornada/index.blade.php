@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
       Jornada Ambiental
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('jornada.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table table-striped-columns text-center">
            <table class="table mt-3 table table-striped-columns" id="jornada">

                <thead>
                    <tr>
                
                        <th>Descripción</th>
                        <th>Ubicación</th>
                        <th>Date</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($jornada as $jornada)
                    <tr>
                    
                        <td>{{ $jornada->descripcion }}</td>
                        <td>{{ $jornada->ubicacion }}</td>
                        <td>{{ $jornada->date}}</td>
                        <td>
                            <a href="{{ route('jornada.show', $jornada->id) }}"  class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                            <form action="{{ route('jornada.destroy', $jornada->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('jornada.edit', $jornada->id) }}"class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <script>
                DataTabla('#jornada', [3, 'desc']);
            </script>
            @endsection