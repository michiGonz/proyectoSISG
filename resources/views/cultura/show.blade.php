@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Mostrar Registro de Cultura en Seguridad, Salud y Ambiente</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('cultura.store') }}">


            <div class="table table-striped-columns">
                @csrf
                <div class="form-group ">
                    <label for="comite_cumplido">Acciones Ejecutados</label>
                    <input value="{{ $cultura->comite_cumplido}}" type="number" disabled="true" name="ejecutadas" id="ejecutadas" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input value="{{ $cultura->observacion}}" type="text" disabled="true" name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input value="{{ $cultura->date}}" disabled="true" class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">
                    <a href="{{ route('cultura.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection