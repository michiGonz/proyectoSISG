@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Crear Nuevo Indicador

    </h2>
    <div class="form-group">
        <select class="form-control table-primary" name="nombre_indicador" id="nombre_indicador" aria-label="Default select example">

            <option value="planificado">Planificado</option>
            <option value="noplanificado">No planificado</option>

        </select>
    </div>
</div>

@endsection