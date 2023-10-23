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

            <div class="form-group">
                <select class="form-control table-primary" name="nombre_indicador" id="nombre_indicador" aria-label="Default select example">
                    <option value="opsa">OPSA</option>
                    <option value="simulacro">Simulacro</option>
                    <option value="comite">Comite de Seguridad Salud y Ambiente</option>
                    <option value="plan">Plan de formacion seguridad salud y ambiente</option>
                    <option value="parametros_ambientales">Parametros Ambientales</option>
                    <option value="visita">Visita Gerencial</option>
                    <option value="auditoria">Auditorias de permisos de trabajo</option>
                    <option value="aprendiendo">Aprendiendo en el trabajo</option>
                    <option value="monitoreo">Monitoreos Ambientales</option>
                    <option value="jornada">Jornada Ambiental</option>
                </select>
            </div>

            <div id="plan_charla" style="display: none;">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="programadas_mes">Charlas por dia</label>
                        <input type="number" name="charla_nro_dias" id="charla_nro_dias" class="form-control" value=0>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="programadas_mes">Dia de la semana</label>
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
                <input type="number" name="programacion_anual" id="programacion_anual" class="form-control" value=0 required>
            </div>

            <div id="programacion_mensual">
                <div class="form-group">
                    <label for="programadas_mes">Programacion Mensual</label>
                    <input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>
                </div>
            </div>
            <div class="row" id="fechas"></div>

            <div class="row" id="fecha1"></div>

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
    $('#nombre_indicador').change(function() {
        let indicador = $('#nombre_indicador').val();
        $('#programacion_anual').val('').parent().css('display', 'block');
        $('#programacion_mensual').html('');
        $('#plan_charla').css('display', 'none');
        $('#fechas').html('');
        switch (indicador) {
            case 'opsa':
            case 'auditoria':
                $('#programacion_mensual').html(`<div class="form-group">` +
                    `<label for="programadas_mes">Programacion Mensual</label>` +
                    `<input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>` +
                    ` </div>`);
                break;


            case 'plan': // nombre del indicador
                $('#programacion_anual').parent().css('display', 'none');
                $('#plan_charla').css('display', 'block');
                //funciones del indicador
                break; // cierre de las funciones del indicador 
        }
    });
    $('#programacion_anual').change(function() {
        let nro = parseInt($('#programacion_anual').val());
        let indicador = $('#nombre_indicador').val();
        $('#fechas').html('')
        if (nro <= 50) {
            switch (indicador) {
                case 'simulacro':
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-3">' +
                            '<label for="">Nombre del simulacro</label>' +
                            '<input class="form-control" id="date" type="text" name="nombre_simulacro[]" required />' +
                            '<label for="date">Fecha</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>');
                    }
                    break;
                case 'comite':
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-6">' +
                            '<label for="date">Fecha de entrega de insasel</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>' +
                            '<div class="form-group col-md-6">' +
                            '<label for="date">Fecha de reunion</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>');
                    }
                    break;
                case 'visita': // nombre del indicador 
                    for (let index = 0; index < nro; index++) {
                        $('#fechas').append('<div class="form-group col-md-3">' +
                            '<label for="">Lugar de la visita</label>' +
                            '<input class="form-control" id="date" type="text" name="Lugar_visita[]" required />' +
                            '<label for="date">Fecha</label>' +
                            '<input class="form-control" id="date" type="month" name="date[]" required />' +
                            '</div>');
                    } //funciones del indicador
                    break; // cierre de las funciones del indicador 


                default:

                    break;
            }
        } else {
            alert('Máximo 50 fechas')
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
    $('#charla_nro_dias, #charla_dia').change(function() {
        let nroDias = parseInt($('#charla_nro_dias').val());
        let diaSemana = parseInt($('#charla_dia').val());
        let distribuir = distribuirCantidad(nroDias, diaSemana);
        let total = 0,
            totalCharlas = 0;
        $('#charla_meses').html('');
        distribuir[0].forEach(function(mes, index) {
            $('#charla_meses').append(`<div class="btn btn-primary border-dark text-left col-md-2">` +
                `<b>${meses[index]}</b>` +
                `<br>${distribuir[0][index]} ${dias[diaSemana]}` +
                `<br>${distribuir[1][index]} Charlas` +
                `</div>`);
            totalCharlas = totalCharlas + parseInt(distribuir[0][index]);
            total = total + parseInt(distribuir[1][index]);
        });
        $('#charla_meses').append(`<div class="btn btn-success border-dark text-left col-md-12">` +
            `<b>TOTAL</b>` +
            `<br>${totalCharlas} ${dias[diaSemana]}` +
            `<br>${total} Charlas` +
            `</div>`);
    });

    // ;
</script>
@endsection