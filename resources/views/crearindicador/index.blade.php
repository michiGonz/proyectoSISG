@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
       Crear Nuevo Indicador
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('comite.create') }}"><span> <i class="fas fa-plus"></i> Crear Indicador</span></a>
    </h2>
    <div class="card-body">

@endsection