@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">Crear Registro de Actos Seguros</h2>
    <div class="card-body">
        <a onclick="consultaOpsa('seguro','<?php echo date('m'); ?>','<?php echo date('Y'); ?>')" class="btn btn-secondary">Traer datos Opsa</a>
        <form method="POST" class="row opsa" action="{{ route('actoseguro.store') }}">
            @csrf

            <div class="form-group col-md-6">
                <label for="reacciones_personas">Reacciones de las personas </label>
                <input class="form-control" id="reacciones_personas" type="number" name="reacciones_personas" value="0" />
            </div>


            <div class="form-group col-md-6">
                <label for="equipo_proteccion">Equipo de proteccion personal</label>
                <input class="form-control" type="number" name="equipo_proteccion" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="posicion_persona">Posiciones de las personas</label>
                <input class="form-control" type="number" name="posicion_persona" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="herramienta_equipo">Herramientas y equipo</label>
                <input class="form-control" type="number" name="herramienta_equipo" value="0" />
            </div>


            <div class="form-group col-md-6">
                <label for="procedimiento_orden">Procedimientos, orden y limpieza</label>
                <input class="form-control" type="number" name="procedimiento_orden" value="0" />
            </div>

            <div class="form-group col-md-6">
                <label for="ambiente">Ambiente</label>
                <input class="form-control" id="ambiente" type="number" name="ambiente" value="0" />
            </div>
            <div class="form-group col-md-6">
                <label for="cantidad">Total Observaciones</label>

                <input class="form-control" id="cantidad" type="number" name="cantidad" value="" required />
            </div>

            <div class="form-group col-md-6">
                <label for="observacion">Observacion</label>
                <textarea type="text " name="observacion" class="form-control" required></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="" />
            </div>

            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    @endsection