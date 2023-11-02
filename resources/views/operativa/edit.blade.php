@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Reporte de Eficiencia Operativa

    </h2>
    <div class="card-body">
<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('operativa.update', $operativ->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group col-md-6">
            <label for="acciones_pendientes">Acciones Ejecutados</label>
            <input value="{{ $operativa->acciones_pendientes}}" type="number" name="acciones_pendientes" id=""  value=0 class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input value="{{ $operativa->observacion}}" type="text" name="observacion" id="observacion"
                class="form-control" />
        </div>

        <div class="form-group col-md-6">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$operativa->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('operativa.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


