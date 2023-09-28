@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro Auditorias de Permisos de Trabajo
    </h2>
    <div class="card-body">
    <form method="POST" action="{{ route('auditorias.update', $auditorias->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="table table-striped-columns ">
            @csrf
            <div class="form-group ">
                <label for="auditorias_generadas">Auditorias Generadas </label>
                <input value={{ $auditorias->permisos_generados }} type="number" name="auditorias_generadas" id="auditorias_generadas" class="form-control"
                    value=0 />
            </div>

            <div class="form-group ">
                <label for="auditadas_pdvsa">Auditados PDVSA</label>
                <input value={{ $auditorias->auditadas_pdvsa}}  type="number" name="auditadas_pdvsa" id="auditadas_pdvsa" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="auditadas_qqgas">Auditados QQgas</label>
                <input value={{ $auditorias->auditadas_qqgas }}   type="number" name="auditadas_qqgas" id="auditadas_qqgas" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="desviacion_qqgas">Desviaciones QQgas</label>
                <input value={{ $auditorias->desviacion_qqgas }}  type="number" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="desviaciones_pdvsa">Desviaciones PDVSA</label>
                <input value={{ $auditorias->desviaciones_pdvsa }}  type="number" name="desviaciones_pdvsa" id="desviaciones_pdvsa" class="form-control" value=0 />
            </div>

            <table class="table table-striped table-primary">
                <div class="form-check  table-primary ">
                    <h5>Desviaciones QQgas</h5>
                    <input class="form-check-input" type="checkbox"  value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        desviacion 1
                    </label>
                </div>
                <div class="form-check  table-primary">
                    <input class="form-check-input" type="checkbox"  value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Desviacion 2
                    </label>
                </div>
            </table>

            <div class="form-check table-danger  ">
                <h5>Desviaciones PDVSA</h5>
                <input class="form-check-input" type="checkbox"  value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    desviacion 1
                </label>
            </div>
            <div class="form-check table-danger">
                <input class="form-check-input" type="checkbox"  value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Desviacion 2
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="sindesviacion_qqgas">Permisos de Trabajo sin desviacion Qqgas</label>
            <input value={{ $auditorias->sindesviacion_qqgas }}  type="number" name="sindesviacion_qqgas" id="sindesviacion_qqgas" class="form-control" value=0 />
        </div>

        <div class="form-group">
            <label for="sindesviacionpdvsa">Permisos de Trabajo sin desviacion PDVSA</label>
            <input value={{ $auditorias->sindesviacionpdvsa }}  type="number" name="sindesviacionpdvsa" id="sindesviacionpdvsa" class="form-control" value=0 />
        </div>

        <div class="form-group">
            <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados Qqgas</label>
            <input value={{ $auditorias->noauditadas_qqgas }}  type="number" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 />
        </div>

        <div class="form-group">
            <label for="noauditadas_pdvsa">Permisos de Trabajo no Auditados PDVSA</label>
            <input value={{ $auditorias->noauditadas_pdvsa}}  type="number" name="noauditadas_pdvsa" id="noauditadas_pdvsa" class="form-control" value=0 />
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input value="{{ $auditorias->observacion }}" name="observacion" id="observacion" class="form-control" />
        </div>

        <div class="form-group">
            <label for="date">Fecha</label>
            <input value="{{ $auditorias->date }}" class="form-control" id="date" type="date" name="date" value="0" />
        </div>

        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>

            <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
