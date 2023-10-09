@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Configuraciones del sistema</h2>
    <div class="card-body">
        <h5>Configuracion Con PROFIT</h5>
    <a class="btn btn-warning float-left" href="{{ route('unidadfuncional.index') }}" class="btn btn-secondary">Profit UF</a>
    </div>
    <div class="card-body">
    <h5>Configuracion de usuarios Con PROFIT </h5>
    <a class="btn btn-danger float-left" href="{{ route('usuariosprofit.index') }}" class="btn btn-secondary">Profit UF</a>
    </div>    
</div>
@endsection