@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Crear Registro de Actos Seguros
        <a onclick="consultaOpsa('seguro','<?php echo date('m'); ?>','<?php echo date('Y'); ?>')" class="btn btn-warning float-right">Traer datos Opsa</a>
    </h2>
    
    <div class="card-body">
        <form method="POST" class="row" id="opsa" action="{{route('actoseguro.store') }}">
            @csrf
            <div class="form-group col-md-6">
                <label for="RP_main">Reacciones de las personas </label>
                <input class="form-control" id="RP_main" type="number" name="RP_main" value="0" />
                <div id="suma_RP_main"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="EPP_main">Equipo de proteccion personal</label>
                <input class="form-control" type="number" name="EPP_main" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="PP_main">Posiciones de las personas</label>
                <input class="form-control" type="number" name="PP_main" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="HE_main">Herramientas y equipo</label>
                <input class="form-control" type="number" name="HE_main" value="0" />
            </div>


            <div class="form-group col-md-6">
                <label for="PROCE_main">Procedimientos, orden y limpieza</label>
                <input class="form-control" type="number" name="PROCE_main" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="A_main">Ambiente</label>
                <input class="form-control" id="A_main" type="number" name="A_main" value="0" />
            </div>
            <div class="form-group col-md-6">
                <label for="cantidad">Total Observaciones</label>

                <input class="form-control" id="cantidad" type="number" name="cantidad" value="" required />
            </div>


            <div class="form-group col-md-6">
                <label for="observacion">Observacion</label>
                <textarea type="text " name="observacion" class="form-control" required></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="" />
            </div>

            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<script>
    $('#RP_main input').change(function() {
        let suma = 0;
        $('#RP_main').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_RP_main').html(suma);
    });
</script>
@endsection