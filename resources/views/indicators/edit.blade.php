@extends('base')

@section('content')

<div class="container">
        <h2>Editar Indicador</h2>
        <form action="{{ route('indicators.update', $indicator->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre del Indicador:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $indicator->name }}" required>
                <input type="text" class="form-control" id="description" name="description" value="{{ $indicator->description }}">
            </div>
            <div class="form-group">
                <label for="actividad_id">Actividad:</label>
                <select class="form-control" id="activity_id" name="activity_id" required>
                    @foreach ($actividades as $actividad)
                        <option value="{{ $actividad->id }}" {{ $actividad->id === $indicator->activity_id ? 'selected' : '' }}>{{ $actividad->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Indicador</button>
        </form>
    </div>
</div>
@endsection