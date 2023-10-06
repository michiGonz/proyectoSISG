@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Acto Seguro
    </h2>
    <div class="card-body">
    <form method="POST" class="row" action="{{ route('actoseguro.update', $actoseguro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group col-md-6">
            <label for="reacciones_personas">RP</label>
            <input class="form-control" type="number" name="reacciones_personas"
                value="{{$actoseguro->reacciones_personas}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="equipo_proteccion">EPP</label>
            <input class="form-control" type="number" name="equipo_proteccion"
                value="{{$actoseguro->equipo_proteccion}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="posicion_persona">PP</label>
            <input class="form-control" type="number" name="posicion_persona"
                value="{{$actoseguro->posicion_persona}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="herramienta_equipo">HE</label>
            <input class="form-control" type="number" name="herramienta_equipo"
                value="{{$actoseguro->herramienta_equipo}}" />
        </div>


        <div class="form-group col-md-6">
            <label for="procedimiento_orden">POL</label>
            <input class="form-control" type="number" name="procedimiento_orden" value="0"
                value="{{ $actoseguro->procedimiento_orden }}" />
        </div>

        <div class="form-group col-md-6">
            <label for="ambiente">A</label>
            <input class="form-control" type="number" name="ambiente" value="0" value="{{ $actoseguro->ambiente }}" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input class="form-control" type="text" name="ambiente" value="{{ $actoseguro->observacion }}" />
        </div>


        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="{{ $actoseguro->date }}" />
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
</div>
</form>

@endsection
