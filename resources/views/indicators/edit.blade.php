@extends('base')

@section('content')

<div class="container">
        <h2>Editar Indicador</h2>
        <form action="{{ route('indicators.update', $indicator->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
          
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                    <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Indicador</button>
        </form>
    </div>
</div>
@endsection
