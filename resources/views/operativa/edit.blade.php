@extends('base')
@section('title', 'Inicio')
@section('content')

<h2>Editar Registro de Eficiencia Operativa</h2>

<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('operativa.update', $operativa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="comite_cumplido">Acciones Ejecutados</label>
            <input value="{{ $operativa->comite_cumplido}}" type="number" name="comite_cumplido" id=""  value=0 class="form-control">
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $operativa->observacion}}" type="text" name="observacion" id="observacion"
                class="form-control" />
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$operativa->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('operativa.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


