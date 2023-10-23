@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Registro de Parametros Ambientales
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('parametros.store') }}">
            @csrf
            <div class="form-group">
                <label for="planificado">Parametros Ambientales Planificados</label>
                <input type="number" value="{{ $parametros->planificado}}" disabled="true" name="planificado" id="planificado" class="form-control">
            </div>

            <div class="form-group">
                <label for="ejecutados">Parametros Ambientales Ejecutados</label>
                <input type="number" value="{{ $parametros->ejecutados}}" disabled="true" name="ejecutados" id="ejecutados" class="form-control" value=0 />
            </div>

            <div class=" card-body form-group col-md-6 table-primary">
                <h6>Unidades Funcionales </h6>
                <label for="PROD">Produccion</label>
                <input value="{{ $parametros->PROD}}" disabled="true" class="form-control" type="number" name="PROD" value=0 />
                <label for="MTTO">Mantenimiento Mecanico</label>
                <input value="{{ $parametros->MTTO}}" disabled="true" class="form-control" type="number" name="MTTO" value=0 />
                <label for="SSGG">SSGG</label>
                <input value="{{ $parametros->SSGG}}" disabled="true" class="form-control" type="number" name="SSGG" value=0 />
                <label for="SC">SC</label>
                <input value="{{ $parametros->SC}}" disabled="true" class="form-control" type="number" name="SC" value=0 />
                <label for="CC">CC</label>
                <input value="{{ $parametros->CC}}" disabled="true" class="form-control" type="number" name="CC" value=0 />
                <label for="SSII">SSII</label>
                <input value="{{ $parametros->SSII}}" disabled="true" class="form-control" type="number" name="SSII" value=0 />

            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $parametros->date}}" class="form-control" disabled="true" id="date" type="date" name="date" value="" />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input value="{{ $parametros->observacion}}" disabled="true" name="observacion" id="observacion" class="form-control" rows="1" />
            </div>


            <div class="form-group col-md-12 text-center">

                <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
    </div>
    </form>
</div>
@endsection