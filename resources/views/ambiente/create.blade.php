@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2>Crear Registro de Visita Gerencial</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('ambiente.store') }}">
                    <td><a class="btn btn-success" class="nav-link" href="{{ route('ambiente.create') }}"><span>Crear
                                Reporte</span></a></td>
        </tr>
    </tbody>
</div>

<div class="container">
    @csrf
    <div class="form-group ">
        <label for="name">Lugar de la visita</label>
        <textarea type="text" name="name" id="name" class="form-control" rows="1" required></textarea>
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea type="text " name="description" id="description" class="form-control" rows="4" required></textarea>
    </div>
    <div>
        <label for="acompanantes">Cantidad de Personas</label>
        <input type="number" name="cantpersona" id="cantpersona" class="form-control">
    </div>

    <div class="form-group">
        <label for="acompanantes">Nombre de Acompañantes</label>
        <textarea name="acompanantes" id="acompanante" class="form-control" rows="1" required></textarea>
    </div>

    <div class="container px-1 px-sm-5 mx-auto">

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="" />
        </div>

        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary">Crear Registro</button>

            <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
@endsection
