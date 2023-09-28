@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
    Mostrar Reporte de Visita Gerencial
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('ambiente.update', $ambient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-md-6">
                <label for="name">Ubicacion</label>
                <input disabled value="{{ $ambient->name }}" type="text" name="ubicacion" id="ubicacion" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="description">Descripcion de la Visita</label>
                <input disabled value="{{ $ambient->description }}" type="text" name="description" id="description" class="form-control" />
            </div>

            <div class="form-group col-md-2">
                <label for="cantpersona">Cantidad de Personas</label>
                <input disabled value="{{ $ambient->cantpersona }}" type="number" name="cantpersona" id="cantpersona" class="form-control" />
            </div>

            <div class="form-group col-md-5">
                <label for="acompanantes">Nombre de Acompañantes</label>
                <input disabled value="{{ $ambient->acompanantes }}" name="acompanantes" id="acompanante" class="form-control" />
            </div>

            <div class="form-group col-md-5">
                <label for="date">Fecha</label>
                <input disabled value="{{ $ambient->date }}" type="date" id="start" class="form-control text-left mr-2" name="date">
            </div>

            <div class="form-group col-md-12 text-center">
                <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection

