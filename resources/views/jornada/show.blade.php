@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Jornada Ambiental
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns">
            <form method="POST" class="row" action="{{ route('jornada.update', $jornada->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group col-md-6">
                    <label for="jornadas_ejecutadas">Comites Ejecutados</label>
                    <input disabled value="{{ $jornada->jornadas_ejecutadas}}" type="number" name="jornadas_ejecutadas" id="jornadas_ejecutadas" value=0 class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="descripcion">Descripcion</label>
                    <input disabled value="{{ $jornada->descripcion}}" type="text" name="descripcion" id="descripcion" class="form-control" />
                </div>

                <div class="form-group col-md-6">
                    <label for="ubicacion">Ubicacion</label>
                    <input disabled value="{{ $jornada->ubicacion}}" type="text" name="ubicacion" id="ubicacion" class="form-control" />
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="date">Fecha</label>
                        <input disabled value="{{$jornada->date}}" type="date" id="start" class="form-control text-left mr-2" name="date">
                    </div>
                </div>

                <div class="form-group col-md-12 text-center">
                    <a href="{{ route('jornada.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection