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
                    @if(count($indicadorplan->date->PROD)>0)
                        @foreach ($indicadorplan->date->PROD as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="MTTO">Mantenimiento</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="MTTO[]" id="MTTO" multiple>
                    @if(count($indicadorplan->date->MTTO)>0)
                        @foreach ($indicadorplan->date->MTTO as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SSGG">Servicios Generales</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SSGG[]" id="SSGG" multiple>
                    @if(count($indicadorplan->date->SSGG)>0)
                        @foreach ($indicadorplan->date->SSGG as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="CC">Compras y Contrato</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="CC[]" id="CC" multiple>
                    @if(count($indicadorplan->date->CC)>0)
                        @foreach ($indicadorplan->date->CC as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SSII">Sistemas de Información</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SSII[]" id="SSII" multiple>
                    @if(count($indicadorplan->date->SSII)>0)
                        @foreach ($indicadorplan->date->SSII as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="SC">Seguridad Corporativa</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="SC[]" id="SC" multiple>
                    @if(count($indicadorplan->date->SC)>0)
                        @foreach ($indicadorplan->date->SC as $valor)
                        <option value="{{$valor}}">{{$valor}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="" required/>
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
    $("select").select2();
</script>

@endsection