@extends('base')
@section('title', 'Inicio')
@section('content')
    <div class="container">

        <h2>Editar Registro de Plan de Formacion, Seguridad Salud y Ambiente</h2>
        <form method="POST" action="{{ route('planificacionformacion.update', $planificacionformacion->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="programadas_anual">Meta establecida Por año</label>
                <input value="{{ $planificacionformacion->programadas_anual }}" type="number" name="ejecutadas" id="ejecutadas"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="programadas_mensual">Meta establecida Por Mes</label>
                <input value="{{ $planificacionformacion->programadas_mensual }}" type="number" name="programadas_mensual"
                    id="meta" class="form-control" value=0 />
            </div>

            <div class="table-primary">
                <label for="programadas_seguridad">Meta Establecida en Seguridad</label>
                <input value="{{ $planificacionformacion->programadas_seguridad }}" type="number" name="programadas_seguridad"
                    id="programadas_seguridad" class="form-control" value=0 />
            </div>

            <div class="table-warning">
                <label for="programadas_salud">Meta Establecida en Salud</label>
                <input value="{{ $planificacionformacion->programadas_salud }}" type="number" name="programadas_salud"
                    id="programadas_salud" class="form-control" value=0 />
            </div>

            <div class="table-info">
                <label for="programadas_ambiente">Meta Establecida en Ambiente</label>
                <input value="{{ $planificacionformacion->programadas_ambiente }}" type="number" name="programadas_ambiente"
                    id="programadas_ambiente" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $planificacionformacion->date }}" class="form-control" id="date" type="date" name="date" />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input value="{{ $planificacionformacion->observacion }}" name="observacion" id="observacion" class="form-control" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Planificacion</button>
                <a href="{{ route('planificacionformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

   
 @endsection
