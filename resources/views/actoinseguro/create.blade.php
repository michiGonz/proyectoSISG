@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">

    <h2 class="card-header">
        Crear Registro de Actos Inseguros
        <a onclick="consultaOpsa('inseguro','<?php echo date('m'); ?>','<?php echo date('Y'); ?>')" class="btn btn-warning float-right">Traer datos Opsa</a>
    </h2>

    <div class="card-body">

        <form method="POST" class="row" id="opsa" action="{{ route('actoinseguro.store') }}">
            @csrf

            <div class="form-group col-md-6 card-body table-primary" id="reaccion">
                <h6>Reacciones de las personas</h6>
                <label for="RP_1">Ajustan su EPP</label>
                <input class="form-control" type="number" name="RP_1" value=0 />
                <label for="RP_2">Cambian de posicion</label>
                <input class="form-control" type="number" name="RP_2" value=0 />
                <label for="RP_3">Reacomodan su trabajo</label>
                <input class="form-control" type="number" name="RP_3" value=0 />
                <label for="RP_4">Dejan de Trabajar</label>
                <input class="form-control" type="number" name="RP_4" value=0 />
                <label for="RP_5">Colocan puesta a tierra</label>
                <input class="form-control" type="number" name="RP_5" value=0 />
                <label for="RP_6">Colocan bloqueos</label>
                <input class="form-control" type="number" name="RP_6" value=0 />
                <br>
                <div class="card-body table-danger text-center" id="suma_reaccion"></div>

            </div>

            <div class="form-group col-md-6 card-body table-danger" id="equipo">
                <h6>Equipo de proteccion personal</h6>
                <label for="EPP_1">Cabeza</label>
                <input class="form-control" type="number" name="EPP_1" value=0 />
                <label for="EPP_2">Ojos y Cara</label>
                <input class="form-control" type="number" name="EPP_2" value=0 />
                <label for="EPP_3">Oidos</label>
                <input class="form-control" type="number" name="EPP_3" value=0 />
                <label for="EPP_4">Aparato respiratorio</label>
                <input class="form-control" type="number" name="EPP_4" value=0 />
                <label for="EPP_5">Brazos y manos</label>
                <input class="form-control" type="number" name="EPP_5" value=0 />
                <label for="EPP_6">Tronco</label>
                <input class="form-control" type="number" name="EPP_6" value=0 />
                <label for="EPP_7">Piernas y pies</label>
                <input class="form-control" type="number" name="EPP_7" value=0 />
                <br>
                <div class="card-body table-primary text-center" id="suma_equipo"></div>
            </div>

            <div class="form-group col-md-6 card-body table-warning" id=posicion>
                <h6>Posiciones de las personas</h6>
                <label for="PP_1">Golpear contra objetos</label>
                <input class="form-control" type="number" name="PP_1" value=0 />
                <label for="PP_2">ser golpeados por objetos</label>
                <input class="form-control" type="number" name="PP_2" value=0 />
                <label for="PP_3">Quedar atrapado en,dentro de o entre objetos</label>
                <input class="form-control" type="number" name="PP_3" value=0 />
                <label for="PP_4">Caidas</label>
                <input class="form-control" type="number" name="PP_4" value=0 />
                <label for="PP_5">Contacto con temperaturas extremas</label>
                <input class="form-control" type="number" name="PP_5" value=0 />
                <label for="PP_6">Contacto con corriente electrica</label>
                <input class="form-control" type="number" name="PP_6" value=0 />
                <label for="PP_7">Inhalacion, adsorcion o ingestion de una sustancia peligrosa</label>
                <input class="form-control" type="number" name="PP_7" value=0 />
                <label for="PP_8">Sobre-esfuerzo</label>
                <input class="form-control" type="number" name="PP_8" value=0 />
                <br>
                <div class="card-body table-danger text-center" id="suma_posicion"></div>
            </div>

            <div class="form-group col-md-6 card-body table-secondary" id="herramientas">
                <h6>Herramientas y Equipo</h6>
                <label for="HE_1">Inadecuados para el trabajo</label>
                <input class="form-control" type="number" name="HE_1" value=0 />
                <label for="HE_2">Empleados en forma incorrecta</label>
                <input class="form-control" type="number" name="HE_2" value=0 />
                <label for="HE_3">En condiciones inseguras</label>
                <input class="form-control" type="number" name="HE_3" value=0 />
                <br>
                <div class="card-body table-danger text-center" id="suma_herramienta"></div>
            </div>

            <div class="form-group col-md-6 card-body table-dark" id="procedimiento">
                <h6>Procedimientos, orden y limpieza</h6>
                <label for="PROCE_1">Procedimientos inadecuados</label>
                <input class="form-control" type="number" name="PROCE_1" value=0 />
                <label for="PROCE_2">Procedimientos no conocidos ni entendidos</label>
                <input class="form-control" type="number" name="PROCE_2" value=0 />
                <label for="PROCE_3">Procedimientos no se cumplen</label>
                <input class="form-control" type="number" name="PROCE_3" value=0 />
                <label for="OL_1">Estandares de orden y limpieza inadecuados</label>
                <input class="form-control" type="number" name="OL_1" value=0 />
                <label for="OL_2">Estandares de orden y limpieza inadecuados</label>
                <input class="form-control" type="number" name="OL_2" value=0 />
                <label for="OL_3">Estandares de orden y limpieza no se cumplen</label>
                <input class="form-control" type="number" name="OL_3" value=0 />
                <br>
                <div class="card-body table-danger text-center" id="suma_procedimiento"></div>
            </div>

            <div class="form-group col-md-6 card-body table-success" id="ambiente">
                <h6>Ambiente</h6>
                <label for="A_1">Transferir incorrectamente productos o materiales liquidos y solidos</label>
                <input class="form-control" type="number" name="A_1" value=0 />
                <label for="A_2">Almacenar incorrectamente materiales solidos, liquidos o equipos</label>
                <input class="form-control" type="number" name="A_2" value=0 />
                <label for="A_3">Corte de vegetación inadecuado</label>
                <input class="form-control" type="number" name="A_3" value=0 />
                <label for="A_4">Productos y/o materiales sin hojas de datos del producto</label>
                <input class="form-control" type="number" name="A_4" value=0 />
                <label for="A_5">Lavar equipo o herramienta con productos inadecuadosn</label>
                <input class="form-control" type="number" name="A_5" value=0 />
                <label for="A_6">Afectacion de cursos de agua</label>
                <input class="form-control" type="number" name="A_6" value=0 />
                <label for="A_7">Mal uso y/o desperdicios de productos y/o Materiales</label>
                <input class="form-control" type="number" name="A_7" value=0 />
                <label for="A_8">Afectación de suelos</label>
                <input class="form-control" type="number" name="A_8" value=0 />
                <label for="A_9">Afectación de faunas silvestre</label>
                <input class="form-control" type="number" name="A_9" value=0 />
                <label for="A_10">Manejo de desechos</label>
                <input class="form-control" type="number" name="A_10" value=0 />
                <br>
                <div class="card-body table-danger text-center" id="suma_ambiente"></div>
            </div>

            <div class="form-group col-md-6">
                <label for="cantidad">Total Observaciones</label>

                <input class="form-control" id="cantidad" type="number" name="cantidad" value="" required />
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="" />
            </div>
            <div class="form-group col-md-12">
                <label for="observacion">Observacion</label>
                <textarea type="text " name="observacion" class="form-control" required></textarea>
            </div>


            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('actoinseguro.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<script>
    $('#reaccion input').change(function() {
        let suma = 0;
        $('#reaccion').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_reaccion').html(suma);
    });

    $('#equipo input').change(function() {
        let suma = 0;
        $('#equipo').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_equipo').html(suma);
    });

    $('#posicion input').change(function() {
        let suma = 0;
        $('#posicion').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_posicion').html(suma);
    });

    $('#herramientas input').change(function() {
        let suma = 0;
        $('#herramientas').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_herramienta').html(suma);
    });

    $('#procedimiento input').change(function() {
        let suma = 0;
        $('#procedimiento').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_procedimiento').html(suma);
    });

    $('#ambiente input').change(function() {
        let suma = 0;
        $('#ambiente').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_ambiente').html(suma);
    });
</script>
@endsection