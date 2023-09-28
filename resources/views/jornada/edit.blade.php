@extends('base')
@section('title', 'Inicio')
@section('content')

<h2>Editar Registro de Jornada Ambiental </h2>

<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('jornada.update', $jornada->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="jornadas_ejecutadas">Comites Ejecutados</label>
            <input value="{{ $jornada->jornadas_ejecutadas}}" type="number" name="jornadas_ejecutadas" id="jornadas_ejecutadas"  value=0 class="form-control">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input value="{{ $jornada->descripcion}}" type="text" name="descripcion" id="descripcion"
                class="form-control" />
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicacion</label>
            <input value="{{ $jornada->ubicacion}}" type="text" name="ubicacion" id="ubicacion"
                class="form-control" />
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{$jornada->date}}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('jornada.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection


