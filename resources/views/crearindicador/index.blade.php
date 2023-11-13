@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Crear Nuevo Indicador

    </h2>
    <div class="form-group">

        <div class="container">

            <form action="{{ route('indicators.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre del Indicador:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <h6>Tipo de indicador</h6>
                <select class="form-control table-primary" name="nombre_indicador" id="planificado" aria-label="Default select example">
                    <option value="planificado" id="planificado">Planificado</option>
                    <option value="noplanificado" id="noplanificado">No planificado</option>
                </select>
                <br>
                <h6>Secuencia</h6>
                <select class="form-control table-primary" name="nombre_indicador" id="planificado" aria-label="Default select example">
                    <option value="planificado" id="planificado">Anual</option>
                    <option value="noplanificado" id="noplanificado">Mensual</option>
                </select>
                <br>
                <div> <button type="submit" class="btn btn-primary text">Crear Indicador</button></div>
            </form>
        </div>

    </div>
</div>


@endsection