@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">
    <h2 class="card-header">
        Crear Reporte de Parametros Ambientales
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('parametros.store') }}">
            @csrf

            <div class="card col-md-6">
                <div class="card-body">

                    <label for="PROD">Producción</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="PROD[]" id="PROD" multiple>
                        @foreach ($indicadorplan->date->PROD as $valor)
                        <option id="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="MTTO">Mantenimiento</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="MTTO[]" id="MTTO" multiple>
                    <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SSGG">Servicios Generales</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SSGG[]" id="SSGG" multiple>
                        <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="CC">Compras y Contrato</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="CC[]" id="CC" multiple>
                        <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SSII">Sistemas de Información</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SSII[]" id="SSII" multiple>
                        <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SC">Seguridad Corporativa</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SC[]" id="SC" multiple>
                        <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="" required />
            </div>

            <div class="form-group col-md-6">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
            </div>


            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
                <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

</div>
<script>
    $("#PROD").select2();
    $("#MTTO").select2();
    $("#CC").select2();
    $("#SSII").select2();
    $("#SC").select2();
    $("#SSGG").select2();
</script>

@endsection