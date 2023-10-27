@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Plan de formacion Seguridad, Salud y Ambiente
    </h2>

    <div class="card-body">
        <form method="POST" action="{{ route('plandeformacion.update', $plandeformacion->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 table-primary">
                            <div class="card-body">
                                <div class="form-group ">
                                    <label for="ejecutadas_ambiente">Formaciones ejecutadas de Ambiente</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_ambiente }}"  name="ejecutadas_ambiente" id="ejecutadas_ambiente" class="form-control" value=0 />
                                </div>
                                <div class="row" id="date_ambiente" value="{{ $plandeformacion->date_ambiente}}"></div>
                            </div>
                        </div>

                        <div class=" col-md-6 table-danger">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ejecutadas_seguridad">Formaciones ejecutadas de Seguridad</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_seguridad}}"  name="ejecutadas_seguridad" id="ejecutadas_seguridad" class="form-control" value=0 />
                                </div>
                                <div class="row" id="fecha1"></div>
                            </div>
                        </div>

                        <div class="col-md-6 table-warning">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ejecutadas_salud">Formaciones ejecutadas de Salud</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_salud }}"  name="ejecutadas_salud" id="ejecutadas_salud" class="form-control" value=0 />
                                </div>
                                <div class="row" id="fecha2"></div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="observacion">Observacion</label>
                                    <input name="observacion" value="{{ $plandeformacion->observacion }}"  id="observacion" class="form-control" required></input>
                                </div>
                            </div>
                        </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('plandeformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>

    </div>
    <script>
    $('#ejecutadas_ambiente').change(function() {
        let nro = parseInt($('#ejecutadas_ambiente').val());
        $('#ejecutadas_ambiente').html('')
        $('#fecha').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_ambiente" type="date" name="date_ambiente[]" required />' +
                    '</div>'
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });

    $('#ejecutadas_seguridad').change(function() {
        let nro = parseInt($('#ejecutadas_seguridad').val());
        $('#ejecutadas_seguridad').html('')
        $('#fecha1').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha1').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_seguridad" type="month" name="date_seguridad[]" required />' +
                    '</div>'
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });


    $('#ejecutadas_salud').change(function() {
        let nro = parseInt($('#ejecutadas_salud').val());
        $('#ejecutadas_salud').html('')
        $('#fecha2').html('')
        if (nro <= 100) {

            for (let index = 0; index < nro; index++) {
                $('#fecha2').append(
                    '<div class="col-md-6">' +
                    '<label for="date">Fecha</label>' +
                    '<input class="form-control" id="date_salud" type="date" name="date_salud[]" required />' +
                    '</div>'
                );
            }

        } else {
            alert('Máximo 100 fechas')
        }
    });
</script>
    @endsection