@extends('base')
@section('title', 'Inicio')
@section('content')

<h2>Editar Registro de Cultura y seguridad</h2>

<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('aprendiendo.update', $aprendiendo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="comite_cumplido">Comites Ejecutados</label>
            <input value="{{ $aprendiendo->cantidad_actividad }}" type="number" name="comite_cumplido" id="comite_cumplido"  value=0 class="form-control">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre de Aprendiendo en el trabajo</label>
            <input value="{{ $aprendiendo->nombre }}" class="form-control" id="nombre" type="text" name="nombre" />
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $aprendiendo->observacion}}" type="text" name="observacion" id="observacion"
                class="form-control" />
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$aprendiendo->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('aprendiendo.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


