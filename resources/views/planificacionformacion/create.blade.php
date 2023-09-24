@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">

    <h2>Planificacion de Plan de Formacion</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('planificacionformacion.store') }}">
            @csrf

            <div class="form-group">
                <label for="programadas_anual">Meta establecida Por año</label>
                <input type="text" name="programadas_anual" id="programadas_anual" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="programadas_mensual">Meta establecida Por Mes</label>
                <input type="number" name="programadas_mensual" id="meta" class="form-control" value=0 />
            </div>

            <div class="table-primary">
                <label for="programadas_seguridad">Meta Establecida en Seguridad</label>
                <input type="number" name="programadas_seguridad" id="programadas_seguridad" class="form-control" value=0 />
            </div>

            <div class="table-warning">
                <label for="programadas_salud">Meta Establecida en Salud</label>
                <input type="number" name="programadas_salud" id="programadas_salud" class="form-control" value=0 />
            </div>

            <div class="table-info">
                <label for="programadas_ambiente">Meta Establecida en Ambiente</label>
                <input type="number" name="programadas_ambiente" id="programadas_ambiente" class="form-control" value=0  />
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('planificacionformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection
