@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Invesigacion de Incidentes
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('investigacion.update', $investigacion->id) }}" method="POST">
            @csrf
            @method('PUT')


            <select class="form-control" name="uf" id="uf" aria-label="Default select example" value="{{ $investigacion->uf}}">
                <option selected>Unidad Funcional</option>
                <option value="uf produccion">UF Produccion</option>
                <option value="uf visita gerencial">UF Mantenimiento</option>
                <option value="uf masc">UF MASC</option>
                <option value="uf sistema de inf">UF Sistema de Información</option>
                <option value="uf ing mtto">UF Ing Mantenimiento</option>
                <option value="uf planificacion y finanzas">UF Planificacion y Finanzas</option>
                <option value="uf compras y contrataciones">UF Compras y Contrataciones</option>
                <option value="uf recursos humanos">UF Recursos Humanos</option>
                <option value="uf servicio generales">UF Servicios Generales</option>
                <option value="uf seguridad corporativa">UF Seguridad Corporativa</option>
                <option value="uf ingenieria de proceso">UF Ingenieria de Proceso</option>
                <option value="uf gerencia general">UF Gerencia General</option>
            </select>
            <br>
            <div class="form-group">
                <label for="nombre_incidente">Nombre del incidente</label>
                <input value="{{ $investigacion->nombre_incidente}}" type="text" name="nombre_incidente" id="nombre_indcidente" class="form-control" />
            </div>
           
            <div class="form-group">
                <label for="nombre_lugar">Ubicacion</label>
                <input value="{{ $investigacion->nombre_lugar}}" type="ubicacion" name="nombre_lugar" id="nombre_lugar" class="form-control">
            </div>

            <div class="form-group ">
                <label>Estado</label>
                <select class="form-control" name="status" id="status" value="{{ $investigacion->status}}">
                    <option value="comunicacion"> Comunicación</option>
                    <option value="comite">Comite</option>
                    <option value="investigacion"> Investigación</option>
                    <option value="informe"> Informe</option>
                    <option value="divulgacion"> Divulgación</option>
                </select>
            </div>
            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input value="{{ $investigacion->observacion}}" name="observacion" id="observacion" class="form-control" />
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $investigacion->date}}" class="form-control" id="date" type="date" name="date" value="" />
            </div>

            <div class="form-group col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Actualizar Registro</button>

                <a href="{{ route('investigacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
            </table>
        </form>
    </div>

</div>
@endsection