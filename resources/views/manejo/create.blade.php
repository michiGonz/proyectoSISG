@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header"> Crear Reporte Manejo del Cambio
    </h2>
    <tr>
        <div class="card-body">
            <form method="POST" action="{{ route('manejo.store') }}">

                <div class="table table-striped-columns">
                    @csrf

                    <label for="cantidad_ejecutadas">Manejos del Cambio Realizados</label>
                    <input type="number" name="cantidad_manejo" id="cantidad_ejecutadas" class="form-control" value=0 required>
                </div>

                <div class="row" id="fechas"></div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" id="observacion" class="form-control" required/>
                </div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('manejo.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </tr>
</div>

<script>
    $('#cantidad_ejecutadas').on('input keyup', function() {
        let nro = parseInt($('#cantidad_ejecutadas').val());
        $('#fechas').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fechas').append(
                    '<div class="card col-md-6">' +
                    '<div class="card-body">' +
                    '<div class="row">' +
                    '<div class="form-group col-md-4">' +
                    '<label for="name">Nombre</label>' +
                    '<input class="form-control" id="name" type="text" name="name[]" required />' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date" type="month" name="date[]" required />' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label>Status</label>' +
                    '<select class="form-control" name="status[]" id="status">' +
                    '<option value="pendiente">Pendiente</option>' +
                    '<option value="evaluado">Evaluado</option>' +
                    '<option value="aprobado">Aprobado</option>' +
                    '</select>' +
                    '</div>' +
                    '<div>' +
                    '<div>' +
                    '<div>'
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });
</script>
@endsection