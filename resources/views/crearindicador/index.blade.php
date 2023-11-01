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

    <script>
        $('#nombre_indicador').change(function() {
            let indicador = $('#nombre_indicador').val();
            switch (indicador) {
                case 'planificado':
                    $('#planificado').html(`<div class="form-group">` +
                        `<label for="nombre_indicador">Programacion Mensual</label>` +
                        `<input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>` +
                        ` </div>`);


                    break;


            }
        });
    </script>

    @endsection