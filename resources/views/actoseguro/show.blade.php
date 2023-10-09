@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
    Reporte de Registro de Actos Seguros
    </h2>
    <div class="card-body">
    <form method="POST" class="row" action="{{ route('actoseguro.store') }}">
        @csrf

        <div class="form-group col-md-6">
            <label for="RP_main">Reacciones de las personas</label>
            <input class="form-control" id="RP_main"  type="number" disabled="true" value="{{ $actos_seguro->RP_main }}"name="RP_main" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="EPP_main">Equipo de proteccion personal</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->EPP_main }}" disabled="true" name="EPP_main" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="PP_main">Posiciones de las personas</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->PP_main}}" disabled="true"name="PP_main" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="HE_main">Herramientas y equipo</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->HE_main}}" disabled="true"name="HE_main" value="0" />
        </div>


        <div class="form-group col-md-6">
            <label for="PROCE_main">Procedimientos, orden y limpieza</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->PROCE_main }}" disabled="true" name="procedimiento_orden" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="A_main">Ambiente</label>
            <input class="form-control" type="number" value="{{ $actos_seguro->A_main }}" disabled="true" name="A_main" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input type="text " name="observacion"value="{{ $actos_seguro->observacion }}" disabled="true" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" value="{{ $actos_seguro->date }}" disabled="true" type="date" name="date" value="" />
        </div>

        <div class="form-group col-md-6">
                <label for="cantidad">Total Observaciones</label>
                <input class="form-control" id="cantidad" value="{{ $actos_seguro->cantidad }}" disabled="true" type="number" name="cantidad" />
            </div>

        <div class="form-group col-md-12 text-center">
            <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
