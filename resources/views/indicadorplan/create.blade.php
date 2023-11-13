@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">

    <h2 class="card-header">
        Planificacion de Indicadores
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('indicadorplan.store') }}">
            @csrf

            <div class="form-group">
                <select class="form-control table-primary" name="nombre_indicador" id="nombre_indicador" aria-label="Default select example">
                    @if (!in_array('opsa',$consulta))
                    <option value="opsa">Observación Preventiva</option>
                    @endif
                    @if (!in_array('Simulacro',$consulta))
                    <option value="simulacro">Simulacro</option>
                    @endif
                    @if (!in_array('comite',$consulta))
                    <option value="comite">Comité de Seguridad y Salud Laborales</option>
                    @endif
                    @if (!in_array('plan',$consulta))
                    <option value="plan">Plan de formación seguridad salud y ambiente</option>
                    @endif
                    @if (!in_array('parametros_ambientales',$consulta))
                    <option value="parametros_ambientales">Parámetros Ambientales</option>
                    @endif
                    @if (!in_array('visita',$consulta))
                    <option value="visita">Visita Gerencial</option>
                    @endif
                    @if (!in_array('auditoria',$consulta))
                    <option value="auditoria">Auditorias de permisos de trabajo</option>
                    @endif
                    @if (!in_array('aprendiendo',$consulta))
                    <option value="aprendiendo">Aprendiendo en el trabajo</option>
                    @endif
                    @if (!in_array('monitoreo',$consulta))
                    <option value="monitoreo">Monitoreos Ambientales</option>
                    @endif
                    @if (!in_array('jornada',$consulta))
                    <option value="jornada">Jornada Ambiental</option>
                    @endif
                </select>
            </div>

            <div id="plan_charla" style="display: none;">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="charla_nro_dias">Charlas por dia</label>
                        <input type="number" name="charla_nro_dias" id="charla_nro_dias" class="form-control" value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="charla_dia">Dia de la semana</label>
                        <select class="form-control table-primary" name="charla_dia" id="charla_dia">
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="charla_meses"></div>
            </div>


            <div class="form-group">
                <label for="programacion_anual">Programacion Anual</label>
                <input type="number" name="programacion_anual" id="programacion_anual" class="form-control" value="0" required/>
            </div>

            <div class="form-group" style="display: none;">
                <label for="programadas_mes">Programacion Mensual</label>
                <input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value="0" required/>
            </div>

            <div class="row" id="fechas"></div>
            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input name="observacion" id="observacion" required class="form-control"required />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Registro</button>

                <a href="{{ route('indicadorplan.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>
<script>
    if ($('#nombre_indicador').val() == 'opsa' || $('#nombre_indicador').val() == 'auditoria') {
        $('#programadas_mes').val(0).parent().css('display', 'block');
    }

    function cambiarTipo() {
        let indicador = $('#nombre_indicador').val();
        $('#programacion_anual').val('').parent().css('display', 'block');
        $('#programadas_mes').val('0').parent().css('display', 'none');
        $('#plan_charla').css('display', 'none');
        $('#fechas').html('');
        switch (indicador) {
            case 'opsa':
            case 'auditoria':
                $('#programadas_mes').val('0').parent().css('display', 'block');
                break;
            case 'monitoreo':
                $('#programacion_anual').val(0).parent().css('display', 'none');
                $('#fechas').html(
                    '<div class="form-group col-md-12">' +
                    '<div class="card-body">' +
                    '<div class="row">' +
                    '<div class="form-group col-md-4">' +
                    '<label for="ruido">Ruido (Anual)</label>' +
                    '<input type="number" name="ruido" id="ruido" class="form-control" value=0 />' +
                    ' </div>' +
                    '<div class="form-group col-md-4">' +
                    '<label for="emisiones">Emisiones (Anual)</label>' +
                    '<input type="number" name="emisiones" id="emisiones" class="form-control" value=0 />' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label for="agua">Agua (Anual)</label>' +
                    '<input type="number" name="agua" id="agua" class="form-control" value=0 />' +
                    '</div>'
                );
                break;
            case 'parametros_ambientales': {
                $('#programacion_anual').val(0).parent().css('display', 'none');
                $('#fechas').html('<div class="card-body">' +
                    '<div class="row">' +
                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Producción</label>' +
                    '<select style="width: 100%;" id="PROD" name="PROD[]" multiple required>' +
                    ' <option value="Proceso del Gas">Proceso del Gas</option>' +
                    ' <option value="Agua">Agua</option>' +
                    '<option value="Químicos consumidos en Operación">Químicos consumidos en Operación</option>' +
                    '</select>' +
                    '</div>' +

                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Mantenimiento</label>' +
                    '<select style="width: 100%;" id="MTTO" name="MTTO[]" multiple required>' +
                    ' <option value="Residuos Sólidos">Residuos Sólidos</option>' +
                    '</select>' +
                    '</div>' +

                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Servicios Generales</label>' +
                    '<select style="width: 100%;" id="SSGG" name="SSGG[]" multiple required>' +
                    ' <option value="Residuos Sólidos">Residuos Sólidos</option>' +
                    '</select>' +
                    '</div>' +

                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Compras y Contratos</label>' +
                    '<select style="width: 100%;" id="CC" name="CC[]" multiple required>' +
                    ' <option value="Residuos Sólidos">Residuos Sólidos</option>' +
                    '</select>' +
                    '</div>' +

                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Sistema de Información</label>' +
                    '<select style="width: 100%;" id="SSII" name="SSII[]" multiple required>' +
                    ' <option value="Residuos Sólidos">Residuos Sólidos</option>' +
                    '</select>' +
                    '</div>' +

                    '<div class="form-group col-md-4 ">' +
                    '<label for="">Seguridad Corporativa</label>' +
                    '<select style="width: 100%;" id="SC" name="SC[]" multiple required>' +
                    ' <option value="Residuos Sólidos">Residuos Sólidos</option>' +
                    '</select>' +
                    '</div>'
                );
                $('#fechas select').select2({
                    tags: true,
                    tokenSeparators: [',']
                });
                //funciones del indicador
                break; // cierre de las funciones del indicador 
            }
            case 'plan': // nombre del indicador
                $('#programacion_anual').parent().css('display', 'none');
                $('#plan_charla').css('display', 'block');
                //funciones del indicador

                break; // cierre de las funciones del indicador 
        }
    }
    cambiarTipo();
    $('#nombre_indicador').change(function() {
        cambiarTipo();
    });
    $('#programadas_mes').on('input keyup', function() {
        let indicador = $('#nombre_indicador').val();
        if (indicador == 'auditoria' || indicador == 'opsa') {
            let mensual = parseInt($('#programadas_mes').val());
            $('#programacion_anual').val(mensual * 12);_
        }
    });
    $('#programacion_anual').on('input keyup', function() {
        let nro = parseInt($('#programacion_anual').val());
        let indicador = $('#nombre_indicador').val();
        $('#fechas').html('');
        if (nro <= 50 || (indicador == 'opsa' || indicador == 'auditoria' || indicador == 'monitoreo' || indicador == 'jornada')) {
            switch (indicador) {
                case 'opsa':
                case 'auditoria':
                    $('#programadas_mes').val(nro / 12);
                    break;
                case 'simulacro':
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-3">' +
                            '<label for="">Nombre del simulacro</label>' +
                            '<input class="form-control" id="name_date" type="text" name="name_date[]" required />' +
                            '<label for="date">Fecha</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>');
                    }
                    break;
                case 'comite':
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-6">' +
                            '<label for="name_date">Fecha de reunion</label>' +
                            '<input class="form-control" id="name_date" type="date" name="name_date[]" required />' +
                            '</div>' +
                            '<div class="form-group col-md-6">' +
                            '<label for="date">Fecha de entrega de Inpsasel</label>' +
                            '<input class="form-control" id="date" type="date" name="date[]" required />' +
                            '</div>');
                    }
                    break;
                case 'visita': // nombre del indicador 
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-3">' +
                            '<label for="name_date">Lugar de la visita</label>' +
                            '<input class="form-control" id="name_date" type="text" name="name_date[]" required />' +
                            '<label for="date">Fecha</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>');
                    } //funciones del indicador
                    break; // cierre de las funciones del indicador 
            }

        } else {
            alert('Máximo 50 fechas');
            $('#fechas').html('');
        }
    });
</script>



<script>
    let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    let dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    function distribuirCantidad(cantidad_x_dia, diaSemana) {
        let consultarApiFecha = true;
        let diasFeriados = [];

        function DiasFeriadosVenezuela(fecha) {
            $.ajax({
                url: 'https://date.nager.at/api/v3/publicholidays/2023/VE',
                type: "GET",
                async: false,
            }).done(function(dato) {
                if (consultarApiFecha == true) {
                    dato.forEach(feriado => {
                        let fecha = feriado.date;
                        diasFeriados.push(new Date(fecha.replace(/-/g, ', ')));
                    });
                    consultarApiFecha = false;
                }
            });

            for (var i = 0; i < diasFeriados.length; i++) {
                if (fecha.getTime() === diasFeriados[i].getTime()) {
                    return true;
                }
            }
            return false;
        }

        function contarRepeticionesDiaPorMes(diaSemana) {
            var repeticiones = [];

            for (var mes = 0; mes < 12; mes++) {
                var contador = 0;
                var fecha = new Date(2023, mes, 1);
                while (fecha.getMonth() === mes) {
                    if (fecha.getDay() === diaSemana && !DiasFeriadosVenezuela(fecha)) {
                        contador++;
                    }
                    fecha.setDate(fecha.getDate() + 1);
                }
                repeticiones[mes] ??= contador;
            }
            return repeticiones;
        }
        var diasPorMes = contarRepeticionesDiaPorMes(diaSemana);
        // console.log(diasPorMes);
        let totalPorMes = [];
        for (let i = 0; i < diasPorMes.length; i++) {
            totalPorMes[i] ??= cantidad_x_dia * diasPorMes[i];
        }
        return [diasPorMes, totalPorMes];
    }
    $('#charla_nro_dias, #charla_dia').on('input keyup', function() {
        let nroDias = parseInt($('#charla_nro_dias').val());
        let diaSemana = parseInt($('#charla_dia').val());
        let distribuir = distribuirCantidad(nroDias, diaSemana);
        let total = 0,
            totalCharlas = 0;
        $('#charla_meses').html(`<input name="dia_semana" value="${diaSemana}" style="display:none"/>`);
        distribuir[0].forEach(function(mes, index) {
            $('#charla_meses').append(`<div class="btn btn-primary border-dark text-left col-md-2">` +
                `<b>${meses[index]}</b>` +
                `<br>${distribuir[0][index]} ${dias[diaSemana]} <input name="cntd_dias[]" value="${distribuir[0][index]}" style="display:none"/>` +
                `<br>${distribuir[1][index]} Charlas <input name="cntd_mes[]" value="${distribuir[1][index]}" style="display:none"/>` +
                `</div>`);
            totalCharlas = totalCharlas + parseInt(distribuir[0][index]);
            total = total + parseInt(distribuir[1][index]);
        });
        $('#charla_meses').append(`<div class="btn btn-success border-dark text-left col-md-12">` +
            `<b>TOTAL</b>` +
            `<br>${totalCharlas} ${dias[diaSemana]}` +
            `<br>${total} Charlas` +
            `</div>`);
        $('#programacion_anual').val(total);
    });

    // ;
</script>
@endsection