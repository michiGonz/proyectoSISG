@extends('base')

@section('title', 'Inicio')

@section('content')
       
<div class="container">
        <h2>Visita Gerencial</h2>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ambiente as $ambient)
                    <tr>
                        <td>{{ $ambient->id }}</td>
                        <td>{{ $ambient->name }}</td>
                        <td>{{ $ambient->description }}</td>
                        <td>{{ $ambient->cantidad }}</td>
                        <td>
                            <a href="{{ route('ambiente.edit', $ambient->id) }}" class="btn btn-primary btn-sm">Mostrar Reporte</a>
                            <form action="{{ route('ambiente.destroy', $ambient->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

   
</div>
@endsection