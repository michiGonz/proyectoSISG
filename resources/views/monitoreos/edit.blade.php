@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Monitoreos Ambientales
    </h2>
    <div class="card-body">
<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('monitoreos.update', $monitoreos->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cantidad_actividad">Acciones Ejecutados</label>
            <input value="{{ $monitoreos->cantidad_actividad}}" type="number" name="cantidad_actividad" id=""  value=0 class="form-control">
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$monitoreos->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $monitoreos->observacion}}" type="text" name="observacion" id="observacion"
                class="form-control" />
        </div>

     

        <div class="form-group  col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


