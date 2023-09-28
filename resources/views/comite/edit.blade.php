@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Comite de Seguridad Salud y Laborales
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('comite.update', $comite->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group  col-md-6">
                <label for="ejecutadas">Comites Ejecutados</label>
                <input value="{{ $comite->ejecutadas}}" type="number" name="ejecutadas" id="ejecutadas" value=0 class="form-control">
            </div>

            <div class="form-group  col-md-6">
                <label for="observacion">Observacion</label>
                <input value="{{ $comite->observacion}}" type="text" name="observacion" id="observacion" class="form-control" />
            </div>

            <div class="form-group  col-md-6">
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input value="{{$comite->date}}" type="date" id="start" class="form-control text-left mr-2" name="date">
                </div>
            </div>

            <div class="form-group  col-md-6">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('comite.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    @endsection