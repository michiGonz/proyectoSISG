@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">
    <h2 class="card-header">
        Editar Registro de Planificacion de Indicadores
    </h2>
    
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('indicadorplan.update', $indicadorplan->id) }}" method="POST">
            @csrf
            @method('PUT')


            <select {{ $indicadorplan->nombre_indicador}}" class="form-control" name="nombre_indicador" id="nombre_indicador"
                aria-label="indicador">
                <option selected>Indicador</option>
                <option value="visita Gerencial">Visita Gerencial</option>
                <option value="Simulacro">Simulacro</option>
                <option value="comite de seguridad salud y ambiente">Comite de Seguridad Salud y Ambiente</option>
            </select>

           <div class="form-group col-md-6">
                <label for="meta">Meta establecida</label>
                <input value="{{ $indicadorplan->meta}}" type="number" name="meta" id="meta" class="form-control" value=0 />
            </div>

            <div class="form-group col-md-6">
                <label for="programacion_anual">Programacion Anual</label>
                <input value="{{ $indicadorplan->programacion_anual}}" type="number" name="programacion_anual" id="programacion_anual" class="form-control" value=0
                    required>
            </div>

            <div class="form-group col-md-6">
                <label for="programadas_mes">Programacion Mensual</label>
                <input value="{{ $indicadorplan->programadas_mes}}"type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>
            </div>

            <div class="row" id="fechas"></div>   

            <div class="form-group col-md-6">
                <label for="observacion">Observacion</label>
                <input value="{{ $indicadorplan->observacion}}"name="observacion" id="observacion" class="form-control" required></input>
            </div>

            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('indicadorplan.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
