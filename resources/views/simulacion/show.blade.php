@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
    Reporte de Registro de Simulacro
    </h2>
    <div class="card-body">
    <form method="POST" action="{{ route('simulacion.store') }}">
        @csrf
    
        <div class="form-group">
            <label for="name">Nombre del simulacro</label>
            <input value="{{ $simulacion->name }}" type="text" disabled="true" name="name" id="name"
                class="form-control" required></textarea>
        </div>
        <div>
            <label for="ubicacion">Ubicacion</label>
            <input value="{{ $simulacion->ubicacion }}" disabled="true" type="ubicacion" name="ubicacion" id="ubicacion"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="observacion">Observacion</label>
            <textarea name="observacion" id="observacion" disabled="true" class="form-control" rows="1"
                required>{{ $simulacion->observacion }} </textarea>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $simulacion->date }}" type="date" disabled="true" id="start"
                    class="form-control text-left mr-2" name="date">
            </div>

            <div class="form-group col-md-12 text-center">

                <a href="{{ route('simulacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection