@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">

    <h2>Editar Registro de Plan de Formacion, Seguridad Salud y Ambiente</h2>
    <form method="POST" action="{{ route('auditorias.store') }}">
        @csrf

        <div class="table table-striped-columns ">
            @csrf
            <div class="form-group ">
                <label for="auditorias_generadas">Auditorias Generadas </label>
                <input value="{{ $auditorias->auditorias_generadas }}" disabled="true" type="number" name="auditorias_generadas" id="auditorias_generadas" class="form-control"
                    value=0 />
            </div>

            <div class="form-group ">
                <label for="auditadas">Auditadas</label>
                <input value="{{ $auditorias->auditadas }}" disabled="true" type="number" name="auditadas" id="auditadas" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="auditadas_desviaciones">Permisos de Trabajo Auditados</label>
                <input value="{{ $auditorias->auditadas_desviaciones }}" disabled="true" type="number " name="auditadas_desviaciones" id="auditadas_desviaciones" class="form-control"
                    value=0 />
            </div>

            <table class="table table-striped table-primary">
                <div class="form-check  table-primary ">
                    <h5>Desviaciones QQgas</h5>
                    <input value="{{ $auditorias->auditadas_desviaciones }}" disabled="true" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        desviacion 1
                    </label>
                </div>
                <div class="form-check  table-primary">
                    <input value="{{ $auditorias->auditadas_desviaciones }}" disabled="true" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Desviacion 2
                    </label>
                </div>
            </table>

            <div class="form-check table-danger  ">
                <h5>Desviaciones PDVSA</h5>
                <input value="{{ $auditorias->auditadas_desviaciones }}" disabled="true" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    desviacion 1
                </label>
            </div>
            <div class="form-check table-danger">
                <input value="{{ $auditorias->auditadas_desviaciones }}" disabled="true" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Desviacion 2
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="auditadas_sindesviaciones">Permisos de Trabajo sin desviacion</label>
            <input value="{{ $auditorias->auditadas_sindesviaciones }}" disabled="true" type="number " name="auditadas_sindesviaciones" id="auditadas_sindesviaciones'" class="form-control"
                value=0 />
        </div>

        <div class="form-group">
            <label for="no_auditados">Permisos de Trabajo no Auditados</label>
            <input value="{{ $auditorias->no_auditados }}" disabled="true" type="number " name="no_auditados" id="no_auditados" class="form-control" value=0 />
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $auditorias->observacion }}" disabled="true" name="observacion" id="observacion" class="form-control" />
        </div>

        <div class="form-group">
            <label for="date">Fecha</label>
            <input value="{{ $auditorias->date }}" disabled="true" class="form-control" id="date" type="date" name="date" value="0" />
        </div>

        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary">Descargarr</button>

            <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
