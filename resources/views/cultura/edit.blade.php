@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Cultura en Seguridad, Salud y Ambiente
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns">
            <form method="POST" class="row" action="{{ route('cultura.update', $cultura->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group col-md-12">
                    <label for="comite_cumplido">Acciones Ejecutadas</label>
                    <input value="{{ $cultura->comite_cumplido}}" type="number" name="comite_cumplido" id="" value=0 class="form-control">
                </div>

                <div class="form-group col-md-12">
                    <label for="observacion">Observacion</label>
                    <input value="{{ $cultura->observacion}}" type="text" name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="form-group col-md-12">
                    <label for="date">Fecha</label>
                    <input value="{{ $cultura->date}}" class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                    <a href="{{ route('cultura.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection