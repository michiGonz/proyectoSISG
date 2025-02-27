@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">

    <h2>Planificacion de Indicadores </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('indicadorplan.store') }}">
            @csrf

            <select class="form-control" name="nombre_indicador" id="nombre_indicador" aria-label="Default select example">
                <option selected>Indicador</option>
                <option value="visita Gerencial">Visita Gerencial</option>
                <option value="Simulacro">Simulacro</option>
                <option value="comite de seguridad salud y ambiente">Comite de Seguridad Salud y Ambiente</option>
            </select>
            <div class="form-group">
                <label for="meta">Meta establecida</label>
                <input type="number" disabled="true" name="meta" id="meta" class="form-control" />
            </div>

            <div class="form-group">
                <label for="programacion_anual">Programacion Anual</label>
                <input type="number" disabled="true" name="programacion_anual" id="programacion_anual" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="programadas_mes">Programacion Mensual</label>
                <input type="number" disabled="true" name="programadas_mes" id="programadas_mes" class="form-control" />
            </div>
            <div class="row" id="fechas"></div>
            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" disabled="true" id="observacion" class="form-control" required></textarea>
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-primary">Crear Registro</button>

                <a href="{{ route('indicadorplan.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

</div>

@endsection