@extends('base')
@section('title', 'Inicio')
@section('content')

<h1>Crear Registro de Actos Seguros</h1>
<div class="container">
    <form method="POST" class="row" action="{{ route('actoseguro.store') }}">
        @csrf

        <div class="form-group col-md-6">
            <label for="reacciones_personas">RP</label>
            <input class="form-control" id="reacciones_personas" type="number" name="reacciones_personas" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="equipo_proteccion">EPP</label>
            <input class="form-control" type="number" name="equipo_proteccion" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="posicion_persona">PP</label>
            <input class="form-control" type="number" name="posicion_persona" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="herramienta_equipo">HE</label>
            <input class="form-control" type="number" name="herramienta_equipo" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="procedimiento_orden">POL</label>
            <input class="form-control" type="number" name="procedimiento_orden" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="ambiente">A</label>
            <input class="form-control" type="number" name="ambiente" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <textarea type="text " name="observacion" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="" />
        </div>

        

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Crear Registro</button>
            <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
