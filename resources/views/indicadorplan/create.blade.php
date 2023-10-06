@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">

    <h2 class="card-header">
        Planificacion de Indicadores
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('indicadorplan.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>

    <div class="card-body">
        <form method="POST" action="{{ route('indicadorplan.store') }}">
            @csrf

            <select class="form-select p-3 m-0 border-0 bd-example m-0 border-0 table-primary" name="nombre_indicador" id="nombre_indicador" aria-label="Default select example">
                <option value="simulacro">Simulacro</option>
                <option value="comite">Comite de Seguridad Salud y Ambiente</option>
                <option value="parametros_ambientales">Parametros Ambientales</option>
                <option value="visita_gerencial">Visita Gerencial</option>

            </select>


            <div class="form-group">
                <label for="meta">Meta establecida</label>
                <input type="number" name="meta" id="meta" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="programacion_anual">Programacion Anual</label>
                <input type="number" name="programacion_anual" id="programacion_anual" class="form-control" value=0 required>
            </div>

            <div class="form-group">
                <label for="programadas_mes">Programacion Mensual</label>
                <input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>
            </div>
            <div class="row" id="fechas"></div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input name="observacion" id="observacion" required class="form-control" />
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Crear Registro</button>

                <a href="{{ route('indicadorplan.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
    </div>
    </form>
</div>
<script>
    $('#programacion_anual').change(function() {
        let nro = parseInt($('#programacion_anual').val());
        let indicador = $('#nombre_indicador').val();
        $('#fechas').html('')
        if (nro <= 50) {
            if (indicador == "simulacro") {
                for (let index = 0; index < nro; index++) {
                    $('#fechas').append('<div class="form-group col-md-3">' +
                        '<label for="date">Nombre del simulacro</label>' +
                        '<input class="form-control" id="date" type="text" name="nombre_simulacro[]" required />' +
                        '<label for="date">Fecha</label>' +
                        '<input class="form-control" id="date" type="month" name="date[]" required />' +
                        '</div>');
                }
            } else {
                for (let index = 0; index < nro; index++) {
                    $('#fechas').append('<div class="form-group col-md-3">' +
                        '<label for="date">Fecha</label>' +
                        '<input class="form-control" id="date" type="month" name="date[]" required />' +
                        '</div>');
                }
            }
        } else {
            alert('Máximo 50 fechas')
        }
    });
</script>


@endsection