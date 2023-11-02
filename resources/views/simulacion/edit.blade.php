@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Simulacro
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('simulacion.update', $simulacion->id) }}" method="POST">
            @csrf
               @method('PUT')
            <div class="form-group form-group col-md-6">
                <label for="name">Nombre del simulacro</label>
                <input value="{{ $simulacion->name }}" type="text" name="name" id="name" class="form-control"
                    required></textarea>
            </div>

            <div class="form-group form-group col-md-6">
                <label for="ubicacion">Ubicacion</label>
                <input value="{{ $simulacion->ubicacion }}" type="ubicacion" name="ubicacion" id="ubicacion"
                    class="form-control">
            </div>

            <div class="form-group form-group col-md-6">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" rows="1"
                    required>{{ $simulacion->observacion }} </textarea>
            </div>


            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('simulacion.create') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection


