@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Visita Gerencial
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('ambiente.update', $ambient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-md-6">
                <label for="name">Ubicacion</label>
                <input value="{{ $ambient->name }}" type="text" name="ubicacion" id="ubicacion" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="description">Descripcion de la Visita</label>
                <input value="{{ $ambient->description }}" type="text" name="description" id="description" class="form-control" />
            </div>


            <div class="col-md-5">
                    <label for="personal">Nombre de Acompañantes</label>
                    <br>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal[]" id="personal" multiple aria-label="Default select example">
                    @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->cod_emp}}">{{$usuario->nombres}} {{$usuario->apellidos}}</option>
                    @endforeach
                    </select>
                </div>

            <div class="form-group col-md-5">
                <label for="date">Fecha</label>
                <input value="{{ $ambient->date }}" type="date" id="start" class="form-control text-left mr-2" name="date">
            </div>

            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<script>
    $("#personal").select2();
</script>
@endsection