@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Crear Registro de Plan de Formacion
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('plandeformacion.store') }}">
            @csrf
            <div class="form-group">
                <label for="ejecutadas">Plan de formaciones ejecutadas</label>
                <input type="number" name="ejecutadas" id="simulacro_cumplido" class="form-control" value=0>
            </div>

            <div class="table-info">
                <label for="ejecutadas_ambiente">Formaciones ejecutadas de Ambiente</label>
                <input type="number" name="ejecutadas_ambiente" id="ejecutadas_ambiente" class="form-control" value=0 />
                <div class="form-group">
                    <label for="date_ambiente">Fecha</label>
                    <input type="date" name="date_ambiente" id="programadas_anual" class="form-control" value=0 />
                </div>
            </div>

            <div class="table-primary">
                <label for="ejecutadas_seguridad">Formaciones ejecutadas de Seguridad</label>
                <input type="number" name="ejecutadas_seguridad" id="ejecutadas_seguridad" class="form-control" value=0 />
                <div class="form-group">
                    <label for="date_seguridad">Fecha</label>
                    <input type="date" name="date_seguridad" id="date_seguridad" class="form-control" value=0 />
                </div>
            </div>

            <div class="table-warning">
                <label for="ejecutadas_salud">Formaciones ejecutadas de Salud</label>
                <input type="number" name="ejecutadas_salud" id="ejecutadas_salud" class="form-control" value=0 />
                <div class="form-group">
                    <label for="date_salud">Fecha</label>
                    <input type="date" name="date_salud" id="date_salud" class="form-control" value=0 />
                </div>
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" required></textarea>
            </div>

            <div class="form-group col-md-12 text-center ">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('plandeformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>

@endsection