@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Auditorias de permisos de Trabajo
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('auditorias.store') }}">
            <td><a class="btn btn-success" class="nav-link" href="{{ route('auditorias.create') }}"><span>Crear
                        Reporte</span></a></td>

                        </tbody>
            <div class="table table-striped-columns ">
                @csrf
                <div class="form-group ">
                    <label for="permisos_generados">Permisos Generadas </label>
                    <input type="number" name="permisos_generados" id="permisos_generados" class="form-control" value=0 />
                </div>

                <div class="form-group ">
                    <label for="auditadas_pdvsa">Auditados PDVSA</label>
                    <input type="number" name="auditadas_pdvsa" id="auditadas_pdvsa" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="auditadas_qqgas">Auditados QQgas</label>
                    <input type="number" name="auditadas_qqgas" id="auditadas_qqgas" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="desviacion_qqgas">Desviaciones QQgas</label>
                    <input type="number" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="desviaciones_pdvsa">Desviaciones PDVSA</label>
                    <input type="number" name="desviaciones_pdvsa" id="desviaciones_pdvsa" class="form-control" value=0 />
                </div>

                <table class="table table-striped table-info">
                    <div class="form-check  table-info">
                        <h5>Desviaciones QQgas</h5>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        No indica hora de inicio de la actividad.
                        </label>
                        
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Permiso sin cerrar.
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica prueba de gas
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No establece en el permiso el uso de un certificado de altura
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No indica nombre y apellido del solicitante, solo firma
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        El saro no indica firma del supervisor responsable
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        El saro no describe el motivo del riesgo en ninguno de los peligros señalados
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No presento el saro al momento de la auditoria
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No corresponde de el numero de permiso en el saro
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                     El saro no indica el numero de permiso
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                     No indica el equipo a intervenir
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Casillas sin llenar ó vacias.
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No especifica herramientas manuales a utilizar.
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica numero de Orden de Trabajo.
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica EPP a utilizar.
                        </label>
                    </div>
                    <div class="form-check  table-info">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                         No indica nombre, apellido ni cargo del autorizante.
                        </label>
                    </div>
                </table>

                <div class="form-check table-danger">
                    <h5>Desviaciones PDVSA</h5>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        No indica hora de inicio de la actividad.
                        </label>
                        
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Permiso sin cerrar.
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica prueba de gas
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No establece en el permiso el uso de un certificado de altura
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No indica nombre y apellido del solicitante, solo firma
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        El saro no indica firma del supervisor responsable
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        El saro no describe el motivo del riesgo en ninguno de los peligros señalados
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No presento el saro al momento de la auditoria
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                       No corresponde de el numero de permiso en el saro
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                     El saro no indica el numero de permiso
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                     No indica el equipo a intervenir
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        Casillas sin llenar ó vacias.
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No especifica herramientas manuales a utilizar.
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica numero de Orden de Trabajo.
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                        No indica EPP a utilizar.
                        </label>
                    </div>
                    <div class="form-check  table-danger">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                         No indica nombre, apellido ni cargo del autorizante.
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="sindesviacion_qqgas">Permisos de Trabajo sin desviacion Qqgas</label>
                <input type="number" name="sindesviacion_qqgas" id="sindesviacion_qqgas" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="sindesviacionpdvsa">Permisos de Trabajo sin desviacion PDVSA</label>
                <input type="number" name="sindesviacionpdvsa" id="sindesviacionpdvsa" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados Qqgas</label>
                <input type="number" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="noauditadas_pdvsa">Permisos de Trabajo no Auditados PDVSA</label>
                <input type="number" name="noauditadas_pdvsa" id="noauditadas_pdvsa" class="form-control" value=0 />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" name="date" value="0" />
            </div>

            <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary">Crear Registro</button>

                <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

    </div>
    </tr>
   
</div>

@endsection