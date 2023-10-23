@extends('base')
@section('title', 'Inicio')
@section('content')
<?php $t = 0;
foreach ($investigacion as $clave => $valor) {
    if (substr($valor['date'], 0, 4) == date('Y')) {
        $t = $t + 1;
    }
} ?>

<div class="card">
    <h2 class="card-header">Crear Registro de Investigacion de Incidentes
    <small class="float-right">Acomulado: {{$t}}</small>
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('investigacion.store') }}">
            @csrf
        
            <select class="form-control" name="uf" id="uf" aria-label="Default select example">
                @foreach ($ufs as $uf)
                <option value="{{$uf->nombres}}">{{$uf->des_depart}}</option>
                
                @endforeach
            </select>


            <div class="form-group">
                <label for="nombre_incidente">Nombre del incidente</label>
                <textarea type="text" name="nombre_incidente" id="nombre_indcidente" class="form-control" rows="1" required></textarea>
            </div>

            <div class="form-group">
                <label for="nombre_lugar">Ubicacion</label>
                <input type="ubicacion" name="nombre_lugar" id="nombre_lugar" class="form-control">
            </div>

            <table class="table table-striped ">
                <div class="form-check  ">
                    <h5>Status</h5>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Comunicación
                    </label>
                </div>
                <div class="form-check  ">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Comite
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Investigación
                    </label>
                </div>
                <div class="form-check  ">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Informe
                    </label>
                </div>
                <div class="form-check  ">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Divulgación
                    </label>
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <textarea name="observacion" id="observacion" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('investigacion.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </table>
        </form>
    </div>

</div>

<script>
    $("#uf").select2();
</script>
@endsection