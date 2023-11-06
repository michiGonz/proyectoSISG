@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Crear Reporte de Aprendiendo en el Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('aprendiendo.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('aprendiendo.store') }}">

            <div class="table table-striped-columns">
                @csrf

                <div class="form-group">
                    <label for="cantidad_actividad">Cantidad de Aprendiendo en el Trabajo</label>
                    <input type="number" name="cantidad_actividad" id="cantidad_actividad" class="form-control" value=0 required/>
                </div>
                <div class="row" id="fechas"></div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" id="observacion" class="form-control" required/>
                </div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                    <a href="{{ route('aprendiendo.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
        </form>
    </div>
</div>
<script>
    $('#cantidad_actividad').on('input keyup', function() {
        let nro = parseInt($('#cantidad_actividad').val());
        $('#fechas').html('')
        if (nro <= 100) {
       
                for (let index = 0; index < nro; index++) {
                    $('#fechas').append(
                        '<div class="card col-md-6">'+
                            '<div class="card-body">'+
                                '<div class="row">'+
                                    '<div class="form-group col-md-6">' +
                                        '<label for="name">Nombre</label>' +
                                        '<input class="form-control" id="name" type="text" name="name[]" required />' +
                                    '</div>'+
                                    '<div class="form-group col-md-6">' +
                                        '<label for="date">Fecha</label>' +
                                        '<input class="form-control" id="date" type="month" name="date[]" required />' +
                                    '</div>'+
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