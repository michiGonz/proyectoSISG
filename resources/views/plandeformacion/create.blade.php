@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Crear Registro de Plan de Formacion
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('plandeformacion.store') }}">
            @csrf
            <div class="form-group col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card-body bg-gradient-primary text-white">
                                <div class="form-group ">
                                    <label for="ejecutadas_ambiente">Formaciones ejecutadas de Ambiente</label>
                                    <input type="number" name="ejecutadas_ambiente" id="ejecutadas_ambiente" class="form-control" value=0 required/>
                                </div>
                                <div class="row" id="fecha"></div>
                            </div>
                        </div>
             
                        <div class=" col-md-6">
                            <div class="card-body bg-gradient-danger text-white">
                                <div class="form-group">
                                    <label for="ejecutadas_seguridad">Formaciones ejecutadas de Seguridad</label>
                                    <input type="number" name="ejecutadas_seguridad" id="ejecutadas_seguridad" class="form-control" value=0 required/>
                                </div>
                                <div class="row" id="fecha1"></div>
                            </div>
                        </div>

                        <div class="col-md-6"><br>
                            <div class="card-body bg-gradient-success text-white">
                                <div class="form-group">
                                    <label for="ejecutadas_salud">Formaciones ejecutadas de Salud</label>
                                    <input type="number" name="ejecutadas_salud" id="ejecutadas_salud" class="form-control" value=0 required/>
                                </div>
                                <div class="row" id="fecha2"></div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="observacion">Observacion</label>
                                    <textarea name="observacion" id="observacion" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 text-center ">
                            <br>
                            <button type="submit" class="btn btn-primary">Crear Registro</button>
                            <a href="{{ route('plandeformacion.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<script>
    $('#ejecutadas_ambiente').on('input keyup', function() {
        let nro = parseInt($('#ejecutadas_ambiente').val());
        $('#ejecutadas_ambiente').html('')
        $('#fecha').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_ambiente" type="date" name="date_ambiente[]" required />' +
                    '</div>'+
                    '<div class="col-md-6">' +
                    '<label for="date">Nombre de Charla</label>' +
                    '<input class="form-control" id="name_ambiente" type="text" name="name_ambiente[]" required />' +
                    '</div>' 
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });

    $('#ejecutadas_seguridad').on('input keyup', function() {
        let nro = parseInt($('#ejecutadas_seguridad').val());
        $('#ejecutadas_seguridad').html('')
        $('#fecha1').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha1').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_seguridad" type="date" name="date_seguridad[]" required />' +
                    '</div>'+
                    '<div class="col-md-6">' +
                    '<label for="date">Nombre de Charla</label>' +
                    '<input class="form-control" id="name_salud" type="text" name="name_seguridad[]" required />' +
                    '</div>' 
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });

    $('#ejecutadas_salud').on('input keyup', function() {
        let nro = parseInt($('#ejecutadas_salud').val());
        $('#ejecutadas_salud').html('')
        $('#fecha2').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha2').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_salud" type="date" name="date_salud[]" required />' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<label for="date">Nombre de Charla</label>' +
                    '<input class="form-control" id="name_salud" type="text" name="name_salud[]" required />' +
                    '</div>' 
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });
</script>
@endsection