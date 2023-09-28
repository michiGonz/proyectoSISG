@extends('base')
@section('title', 'Inicio')
@section('content')

<h2>Editar Registro de Cultura y seguridad</h2>

<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('cultura.update', $cultura->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="comite_cumplido">Acciones Ejecutados</label>
            <input value="{{ $cultura->comite_cumplido}}" type="number" name="comite_cumplido" id=""  value=0 class="form-control">
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $cultura->observacion}}" type="text" name="observacion" id="observacion"
                class="form-control" />
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$cultura->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('cultura.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


