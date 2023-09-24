@extends('base')
@section('title', 'Inicio')
@section('content')

<h1>Reporte de Registro de Actos Seguros</h1>
<div class="table table-primary table-striped ">
    <form method="POST" class="row" action="{{ route('actoseguro.store') }}">
        @csrf

        <div class="form-group col-md-6">
            <label for="reacciones_personas">Reacciones de las personas</label>
            <input class="form-control" id="reacciones_personas"  type="number" disabled="true" value="{{ $actos_seguro->reacciones_personas }}"name="reacciones_personas" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="equipo_proteccion">Equipo de proteccion personal</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->equipo_proteccion }}" disabled="true" name="equipo_proteccion" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="posicion_persona">Posiciones de las personas</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->posicion_persona }}" disabled="true"name="posicion_persona" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="herramienta_equipo">Herramientas y equipo</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->herramienta_equipo }}" disabled="true"name="herramienta_equipo" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="procedimiento_orden">Procedimientos, orden y limpieza</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->procedimiento_orden }}" disabled="true" name="procedimiento_orden" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="ambiente">Ambiente</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->ambiente }}" disabled="true"name="ambiente" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input type="text " name="observacion"value="{{ $actos_seguro->observacion }}" disabled="true" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date"value="{{ $actos_seguro->date }}" disabled="true" type="date" name="date" value="" />
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Descargar "en proceso"</button>
            <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
