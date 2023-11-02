@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Mostrar Reporte de Visita Gerencial
    </h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('ambiente.update', $ambient->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6">
                <label for="name">Ubicacion</label>
                <input value="{{ $ambient->name }}" type="text" disabled name="ubicacion" id="ubicacion" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="description">Descripcion de la Visita</label>
                <input value="{{ $ambient->description }}" disabled type="text" name="description" id="description" class="form-control" />
            </div>


            <div class="col-md-5">
                <label for="personal">Nombre de Acompañantes</label>
                <br>
                @foreach ($ambient->personal as $usuario)
                    - {{$usuario}}<br>
                @endforeach
            </div>
            <div class="form-group col-md-5">
                <label for="date">Fecha</label>
                <input disabled value="{{ $ambient->date }}" type="date" id="start" class="form-control text-left mr-2" name="date">
            </div>
        </form>

    </div>

    <div class="form-group col-md-12 text-center">
        <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>

</div>
<script>
    $("#personal").select2();
</script>
@endsection