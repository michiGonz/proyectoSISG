@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">

    <h2>Editar Registro de Plan de Formacion, Seguridad Salud y Ambiente</h2>
    <form method="POST"  action="{{ route('plandeformacion.update', $plandeformacion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ejecutadas">Plan de formaciones ejecutadas</label>
            <input value="{{ $plandeformacion->ejecutadas }}" type="number" name="ejecutadas" id="ejecutadas" class="form-control">
        </div>

        <div class="form-group">
            <label for="ejecutadas_ambiente">Formaciones ejecutadas de Ambiente</label>
            <input value="{{ $plandeformacion->ejecutadas_ambiente }}" type="number" name="ejecutadas_ambiente" id="ejecutadas_ambiente"
                class="form-control" />
                <div class="form-group">
                    <label for="date_ambiente">Fecha</label>
                    <input value="{{ $plandeformacion->date_ambiente }}" type="date" name="date_ambiente" id="programadas_anual" class="form-control" value=0 />
                </div>
        </div>

        <div class="form-group">
            <label for="ejecutadas_seguridad">Formaciones ejecutadas de Seguridad</label>
            <input value="{{ $plandeformacion->ejecutadas_seguridad}}" type="number" name="ejecutadas_seguridad" id="cantpersona" class="form-control">
            <div class="form-group">
                <label for="date_seguridad">Fecha</label>
                <input  value="{{ $plandeformacion->date_seguridad }}" type="date" name="date_seguridad" id="date_seguridad" class="form-control" value=0 />
            </div>
        </div>

    <div class="form-group">
        <label for="ejecutadas_salud">Formaciones ejecutadas de Salud</label>
        <input value={{ $plandeformacion->ejecutadas_salud }} name="ejecutadas_salud" type="number" id="ejecutadas_salud" class="form-control" >
        <div class="form-group">
            <label for="date_seguridad">Fecha</label>
            <input  value="{{ $plandeformacion->date_salud}}" type="date" name="date_seguridad" id="date_seguridad" class="form-control" value=0 />
        </div>
    </div>

    <div class="form-group">
        <label for="observacion">Observacion</label>
        <input value={{ $plandeformacion->observacion }} name="observacion" id="observacion" class="form-control" required></textarea>
    </div>

        <div class="form-group">
            <button  type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>

</div>
@endsection
