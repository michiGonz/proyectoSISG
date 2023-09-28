@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">

    <h2>Planificacion de Indicadores </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('indicadorplan.store') }}">
            @csrf

            <select class="form-select p-3 m-0 border-0 bd-example m-0 border-0"  name="nombre_indicador" id="nombre_indicador"
                aria-label="Default select example">
                <option selected>Indicador</option>
                <option value= "visita Gerencial">Visita Gerencial</option>
                <option value= "Simulacro">Simulacro</option>
                <option value="comite de seguridad salud y ambiente">Comite de Seguridad Salud y Ambiente</option>
                <option value="Parametros Ambientales">Parametros Ambientales</option>
            </select>


            <div class="form-group">
                <label for="meta">Meta establecida</label>
                <input type="number" name="meta" id="meta" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="programacion_anual">Programacion Anual</label>
                <input type="number" name="programacion_anual" id="programacion_anual" class="form-control" value=0
                    required>
            </div>

            <div class="form-group">
                <label for="programadas_mes">Programacion Mensual</label>
                <input type="number" name="programadas_mes" id="programadas_mes" class="form-control" value=0>
            </div>
            <div class="row" id="fechas"></div>            
            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input name="observacion" id="observacion" class="form-control" />
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
        $('#fechas').html('')
        if (nro <= 50) {
            for (let index = 0; index < nro; index++) {
                $('#fechas').append('<div class="form-group col-md-3">'+
                    '<label for="date">Fecha</label>'+
                    '<input class="form-control" id="date" type="month" name="date[]" />'+
                '</div>');
            }
        }else{
            alert('Máximo 50 fechas')
        }
    });
</script>

@endsection
