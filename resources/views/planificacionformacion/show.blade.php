
@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">

    <h2>Planificacion de Plan de Formacion</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('planificacionformacion.store') }}">
        <div class="table table-striped-columns table-primary table-responsive" >
            @csrf
            <div class="form-group">
                <label for="programadas_anual">Meta establecida Por año</label>
                <input type="text" disabled="true" name="programadas_anual" id="programadas_anual" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="programadas_mensual">Meta establecida Por Mes</label>
                <input type="number" disabled="true" name="programadas_mensual" id="meta" class="form-control" value=0 />
            </div>

            <div class="table-primary">
                <label for="programadas_seguridad">Meta Establecida en Seguridad</label>
                <input type="number" disabled="true" name="programadas_seguridad" id="programadas_seguridad" class="form-control" value=0 />
            </div>

            <div class="table-warning">
                <label for="programadas_salud">Meta Establecida en Salud</label>
                <input type="number" disabled="true" name="programadas_salud" id="programadas_salud" class="form-control" value=0 />
            </div>

            <div class="table-info">
                <label for="programadas_ambiente">Meta Establecida en Ambiente</label>
                <input type="number" disabled="true" name="programadas_ambiente" id="programadas_ambiente" class="form-control" value=0  />
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input class="form-control" disabled="true" id="date" type="date" name="date" />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea disabled="true" name="observacion" id="observacion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Descargar Reporte</button>
                <a href="{{ route('planificacionformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection