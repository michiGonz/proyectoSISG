@extends('base')
@section('title', 'Inicio')
@section('content')

<h1>Mostrar Reporte de Visita Gerencial</h1>

<div class="table table-primary table-striped col-md-7">
    <form method="POST" action="{{ route('ambiente.store') }}">
        @csrf


        <div>
            <label for="name">Ubicacion</label>
            <input value="{{ $ambient->name }}" disabled="true" type="text" name="ubicacion" id="ubicacion"
                class="form-control">

        </div>


        <div class="form-group">
            <label for="description">Descripcion de la Visita</label>
            <input value="{{ $ambient->description }}" type="text" disabled="true" name="description" id="name"
                class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="cantpersona">Cantidad de Acompañantes</label>
            <textarea name="cantpersona" id="cantpersona" disabled="true" class="form-control" rows="1"
                required>{{ $ambient->cantpersona }} </textarea>
        </div>

        <div class="form-group">
            <label for="acompanantes">Nombre de los acompañantes</label>
            <textarea name="acompanantes" id="acompanantes" disabled="true" class="form-control" rows="1"
                required>{{ $ambient->acompanantes }} </textarea>
        </div>

        <div class="container px-1 px-sm-2 mx-auto">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $ambient->date }}" type="date" disabled="true" id="start" class="form-control text-left mr-2" name="date">
            </div>
        </div>

        <div class="form-group">
            <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>

</div>
@endsection
