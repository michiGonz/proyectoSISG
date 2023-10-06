@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Crear Registro de Visita Gerencial</h2>
    <div class="card-body">
        <div class="row">
            <form method="POST" class="row" action="{{ route('ambiente.store') }}">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Lugar de la visita</label>
                    <input type="text" name="name" id="name" class="form-control" rows="1" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" id="description" class="form-control" rows="4" required>
                </div>

                <div class="form-group col-md-2">
                    <label for="acompanantes">Cantidad de Personas</label>
                    <input type="number" name="cantpersona" id="cantpersona" class="form-control">
                </div>

                <div class="form-group col-md-5">
                    <label for="acompanantes">Nombre de Acompañantes</label>
                    <input name="acompanantes" id="acompanante" class="form-control" rows="1" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">crear Registro</button>
                    <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection