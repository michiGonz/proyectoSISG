@extends('base')
@section('title', 'Inicio')
@section('content')

<h2>Editar Registro de Visita Gerencial</h2>

<div class="table table-striped-columns">
    <form method="POST" class="row" action="{{ route('ambiente.update', $ambient->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Ubicacion</label>
            <input value="{{ $ambient->name }}" type="text" name="ubicacion" id="ubicacion" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Descripcion de la Visita</label>
            <input value="{{ $ambient->description }}" type="text" name="description" id="description"
                class="form-control" />
        </div>

        <div class="form-group">
            <label for="cantpersona">Cantidad de Personas</label>
            <input value="{{ $ambient->cantpersona }}" type="number" name="cantpersona" id="cantpersona"
                class="form-control" />
        </div>

        <div class="form-group">
            <label for="acompanantes">Nombre de Acompañantes</label>
            <input value="{{ $ambient->acompanantes }}" name="acompanantes" id="acompanante" class="form-control" />
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $ambient->date }}" type="date" id="start" class="form-control text-left mr-2"
                    name="date">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
