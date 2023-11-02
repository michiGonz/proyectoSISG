@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Crear Reporte de Eficiencia Operativa

    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('operativa.store') }}">

            <div class="table table-striped-columns">
                @csrf

                <div class="form-group ">
                    <label for="acciones_pendientes">Acciones Pendientes</label>
                    <input type="number" name="acciones_pendientes" id="acciones_pendientes" class="form-control" value=0 />
                </div>

                <div class="form-group ">
                    <label for="acciones_ejecutadas">Acciones Ejecutados</label>
                    <input type="number" name="acciones_ejecutadas" id="acciones_ejecutadas" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text " name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="row" id="date"></div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('operativa.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
        </form>
    </div>
    
</div>
<script>
    $('#acciones_ejecutadas').change(function() {
        let nro = parseInt($('#acciones_ejecutadas').val());
        $('#fechas').html('')
        if (nro <= 100) {
       
                for (let index = 0; index < nro; index++) {
                    $('#date').append(
                        '<div class="card col-md-6">'+
                            '<div class="card-body">'+
                                '<div class="row">'+
                                    '<div class="form-group col-md-4">' +
                                        '<label for="name"> Eficiencia Operativa</label>' +
                                        '<input class="form-control" id="name" type="text" name="name[]" required />' +
                                    '</div>'+
                                    '<div class="form-group col-md-4">' +
                                        '<label for="date">Fecha</label>' +
                                        '<input class="form-control" id="date" type="month" name="date[]" required />' +
                                    '</div>'+
                                    '<div class="form-group col-md-4">' +
                                        '<label>Estado</label>' +
                                        '<select class="form-control" id="status" name="status[]">'+
                                            '<option value="pendiente">Pendiente</option>'+
                                            '<option value="evaluado">Ejecutado</option>'+
                                        '</select>'+
                                    '</div>'+
                                '<div>'+
                            '<div>'+
                        '<div>'
                    );
                }
            
        } else {
            alert('Máximo 100 fechas')
        }
    });
</script>
@endsection