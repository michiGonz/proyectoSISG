@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Comite de Seguridad Salud y Laborales
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('comite.update', $comite->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-6 ">
                            <label for="date_reunion">Fecha de Reunión</label>
                            <input class="form-control" value="{{ $comite->date_reunion}}" id="date_reunion" type="date" name="date_reunion" value="" />
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="date_insasel">Fecha de Entrega a Inpsasel</label>
                            <input class="form-control" value="{{ $comite->date_insasel}}" id="date_insasel" type="date" name="date_insasel" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group  col-md-6">
                <label for="observacion">Observacion</label>
                <input value="{{ $comite->observacion}}" type="text" name="observacion" id="observacion" class="form-control" />
            </div>


            <div class="form-group  col-md-6">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('comite.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    @endsection