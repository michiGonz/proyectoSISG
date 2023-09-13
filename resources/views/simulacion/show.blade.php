@extends('base')

@section('content')


<h1>Mostrar Reporte de Simulacro</h1>

<div class="table table-primary table-striped col-md-7">
    <form method="POST" action="{{ route('simulacion.store') }}">
        @csrf
        <div>
            <label for="simulacro_cumplido">Simulacros Ejecutados</label>
            <input value="{{ $simulacion->simulacro_cumplido }}" disabled="true" type="number" name="simulacro_cumplido"
                id="simulacro_cumplido" class="form-control">

        </div>
        <div class="form-group">
            <label for="name">Nombre del simulacro</label>
            <input value="{{ $simulacion->name }}" type="text" disabled="true" name="name" id="name"
                class="form-control" required></textarea>
        </div>

        <div>
            <label for="ubicacion">Ubicacion</label>
            <input value="{{ $simulacion->ubicacion }}" disabled="true" type="ubicacion" name="ubicacion" id="ubicacion"
                class="form-control">
        </div>


        <div class="form-group">
            <label for="observacion">Observacion</label>
            <textarea name="observacion" id="observacion" disabled="true" class="form-control" rows="1"
                required>{{ $simulacion->observacion }} </textarea>
        </div>


        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $simulacion->date }}" type="date" disabled="true" id="start"
                    class="form-control text-left mr-2" name="date">
            </div>

            <div class="form-group">
                <a href="resources/views/simulacion/show.blade.php" download="show.blade.php">Descargar archivo en proceso</a>
                <a href="{{ route('simulacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

        </div>
        @endsection
