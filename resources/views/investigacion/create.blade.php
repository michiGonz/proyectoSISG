@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">Crear Registro de Investigacion de Incidentes</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('investigacion.store') }}">
            @csrf
        
            <div class="form-group">
                <label for="acomulado">Acomulado del mes</label>
                <input type="number" name="acomulado" id="acomulado" class="form-control" value="0" />
            </div>
            <br>

            <select class="form-select p-3 m-0 border-0 bd-example m-0 border-0" name="uf" id="uf" aria-label="Default select example">
                @foreach ($ufs as $uf)
                <option value="{{$uf->co_depart}}">{{$uf->des_depart}}</option>
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

            <table class="table table-striped table-primary">
                <div class="form-check  table-primary ">
                    <h5>Status</h5>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Comunicación
                    </label>
                </div>
                <div class="form-check  table-primary">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Comite
                    </label>
                </div>
                <div class="form-check  table-primary">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Investigación
                    </label>
                </div>
                <div class="form-check  table-primary">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Informe
                    </label>
                </div>
                <div class="form-check  table-primary">
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
@endsection