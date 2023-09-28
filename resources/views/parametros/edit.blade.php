@extends('base')
@section('title', 'Inicio')
@section('content')

    <h2>Editar Parametros Ambientales</h2>

    <div class="table">
        <form method="POST" class="row" action="{{ route('parametros.update', $parametros->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="plsnificado">Acciones Ejecutados</label>
                <input value="{{ $parametros->planificado }}" type="number" name="comite_cumplido" id="" value=0
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="ejecutados">Ejecutados</label>
                <input value="{{ $parametros->ejecutados }}" type="text" name="observacion" id="observacion"
                    class="form-control" />
            </div>

            <div class="form-group col-md-8 table-primary">
                <h6>Unidades Funcionales </h6>
                <label for="PROD">Produccion</label>
                <input value="{{ $parametros->PROD }}" class="form-control" type="number" name="PROD" value=0 />
                <label for="MTTO">Mantenimiento Mecanico</label>
                <input value="{{ $parametros->MTTO }}" class="form-control" type="number" name="MTTO" value=0 />
                <label for="SSGG">SSGG</label>
                <input value="{{ $parametros->SSGG }}" class="form-control" type="number" name="SSGG" value=0 />
                <label for="SC">SC</label>
                <input value="{{ $parametros->SC }}" class="form-control" type="number" name="SC" value=0 />
                <label for="CC">CC</label>
                <input value="{{ $parametros->CC }}" class="form-control" type="number" name="CC" value=0 />
                <label for="SSII">SSII</label>
                <input value="{{ $parametros->SSII }}" class="form-control" type="number" name="SSII" value=0 />
            </div>

            <div class="container px-1 px-sm-2 mx-auto">
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input value="{{ $parametros->date }}" type="date" id="start" class="form-control text-left mr-2"
                        name="date">
                </div>
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input value="{{ $parametros->observacion }}" type="text" name="observacion" id="observacion"
                    class="form-control" />
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
