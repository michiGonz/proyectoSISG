@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h1>Editar Reporte Simulacro</h1>
</div>

<div class="container">


    <h1>Crear Registro de Simulacro</h1>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('simulacion.update', $simulacion->id) }}" method="POST">
            @csrf
               @method('PUT')

            <div class="form-group">
                <label for="simulacro_cumplido">Simulacros Ejecutados</label>
                <input value="{{ $simulacion->simulacro_cumplido }}" type="number" name="simulacro_cumplido"
                    id="simulacro_cumplido" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Nombre del simulacro</label>
                <input value="{{ $simulacion->name }}" type="text" name="name" id="name" class="form-control"
                    required></textarea>
            </div>

            <div>
                <label for="ubicacion">Ubicacion</label>
                <input value="{{ $simulacion->ubicacion }}" type="ubicacion" name="ubicacion" id="ubicacion"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" rows="1"
                    required>{{ $simulacion->observacion }} </textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('simulacion.create') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

</div>
@endsection


