@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2>Crear Registro de Simulacro</h2>
        <div class="card-body">
            <form method="POST" action="{{ route('simulacion.store') }}">
                @csrf
                <div class="form-group">
                    <label for="simulacro_cumplido">Simulacros Ejecutados</label>
                   <input type="number" name="simulacro_cumplido" id="simulacro_cumplido" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Nombre del simulacro</label>
                    <textarea type="text" name="name" id="name" class="form-control" rows="1" required></textarea>
                </div>

                <div>
                    <label for="ubicacion">Ubicacion</label>
                    <input type="ubicacion" name="ubicacion" id="ubicacion" class="form-control">
                </div>


                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
                </div>


                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('simulacion.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    @endsection
