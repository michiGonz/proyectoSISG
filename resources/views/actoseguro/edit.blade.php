@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <h2>Editar Indicador</h2>

    @csrf
    <form action="/enviar" method="POST">
        @method('PUT')

        <label for="reacciones_personas">RP</label>
        <input class="form-control" id="reacciones_personas" type="number" value="{{$actos_seguro->reacciones_personas}}"name="reacciones_personas" />


        <div class="form-group col-md-6">
            <label for="equipo_proteccion">EPP</label>
            <input class="form-control" type="number" name="equipo_proteccion" value="{{$actos_seguro->equipo_proteccion}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="posicion_persona">PP</label>
            <input class="form-control" type="number" name="posicion_persona" value="{{$actos_seguro->posicion_persona}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="herramienta_equipo">HE</label>
            <input class="form-control" type="number" name="herramienta_equipo" value="{{$actos_seguro->herramienta_equipo}}" />
        </div>


        <div class="form-group col-md-6">
            <label for="procedimiento_orden">POL</label>
            <input class="form-control" type="number" name="procedimiento_orden" value="0"
                value="{{ $actos_seguro->procedimiento_orden }}" />
        </div>

        <div class="form-group col-md-6">
            <label for="ambiente">A</label>
            <input class="form-control" type="number" name="ambiente" value="{{ $actos_seguro->ambiente }}" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <textarea type="text " name="observacion" class="form-control" value="{{ $actos_seguro->observacion }}"
                required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="{{ $actos_seguro->date }}" />
        </div>
    </form>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Crear Registro</button>
        <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>

@endsection
