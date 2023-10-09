@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Acto Seguro
    </h2>
    <div class="card-body">
    <form method="POST" class="row" action="{{ route('actoseguro.update', $actoseguro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group col-md-6">
            <label for="RP_main">RP</label>
            <input class="form-control" type="number" name="RP_main"
                value="{{$actoseguro->RP_main}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="EPP_main">EPP</label>
            <input class="form-control" type="number" name="EPP_main"
                value="{{$actoseguro->EPP_main}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="PP_main">PP</label>
            <input class="form-control" type="number" name="PP_main" value="{{$actoseguro->EPP_main}}" />
        </div>

        <div class="form-group col-md-6">
                <label for="OL_main">Procedimientos, orden y limpieza</label>
                <input class="form-control" type="number" name="OL_main" value="{{$actoseguro->OL_main}}" />
        </div>
            
        <div class="form-group col-md-6">
            <label for="HE_main">HE</label>
            <input class="form-control" type="number" name="HE_main"
                value="{{$actoseguro->HE_main}}" />
        </div>


        <div class="form-group col-md-6">
            <label for="PROCE_main">POL</label>
            <input class="form-control" type="number" name="PROCE_main" value="0"
                value="{{ $actoseguro->PROCE_main }}" />
        </div>

        <div class="form-group col-md-6">
            <label for="A_main">A</label>
            <input class="form-control" type="number" name="A_main" value="0" value="{{ $actoseguro->A_main}}" />
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input class="form-control" type="text" name="ambiente" value="{{ $actoseguro->observacion }}" />
        </div>


        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="{{ $actoseguro->date }}" />
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
</div>
</form>

@endsection
