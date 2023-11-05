@extends('base')
@section('title', 'Inicio')
@section('content')
<?php
$totalPDVSA = $auditorias->auditadas_pdvsa + $auditorias->desviaciones_pdvsa + $auditorias->noauditadas_pdvsa;
$totalQQGAS = $auditorias->auditadas_qqgas + $auditorias->desviacion_qqgas + $auditorias->noauditadas_qqgas;
$total = $totalPDVSA + $totalQQGAS ?>
<form method="POST" class="card" action="{{ route('auditorias.update' , $auditorias->id) }}">
    @csrf
    @method('PUT')
    <h3 class="card-header">
        Editar registros de Auditorias de permisos de Trabajo
        <small class="float-right">Total de permisos generados: <span id="total_permisos">{{$total}}</d></small>
    </h3>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">
                        Permisos Generados Quiriquire Gas: <span id="permisos_generadosqqg">{{$totalQQGAS}}</span>
                    </h5>
                    <div class="card-body table-primary ">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="auditadas_qqgas">Permisos Auditados Quiriquire Gas </label>
                                <input disabled type="number" value="{{ $auditorias->auditadas_qqgas }}" name="auditadas_qqgas" id="auditadas_qqgas" class="form-control" value=0 />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="desviacion_qqgas">Permisos con Desviaciones Quiriquire Gas</label>
                                <input type="number" disabled value="{{ $auditorias->desviacion_qqgas }}" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" value=0 />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados Quiriquire Gas</label>
                                <input type="number" value="{{ $auditorias->noauditadas_qqgas }}" disabled name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <h5 class="card-header">
                        Permisos Generados PDVSA: <span id="permisos_generadospdvsa">{{$totalPDVSA}}</span>
                    </h5>
                    <div class="card-body table-danger">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="auditadas_pdvsa">Permisos Auditados por PDVSA </label>
                                <input type="number" disabled name="auditadas_pdvsa" value="{{ $auditorias->auditadas_pdvsa }}" id="auditadas_pdvsa" class="form-control" value=0 />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="desviaciones_pdvsa">Permisos con Desviaciones PDVSA</label>
                                <input type="number" disabled  name="desviaciones_pdvsa" value="{{ $auditorias->desviaciones_pdvsa }}" id="desviaciones_pdvsa" class="form-control" value=0 />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="noauditadas_pdvsa">Permisos de Trabajo no Auditados PDVSA</label>
                                <input type="number" disabled name="noauditadas_pdvsa" value="{{ $auditorias->noauditadas_pdvsa }}" id="noauditadas_pdvsa" class="form-control" value=0 />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card" id="desviacion">
                    <h5 class="card-header"> Desviaciones Quiriquire Gas SA
                        <small class="float-right" id="suma_desviacion"></small>
                    </h5>
                    <div class="card-body table-primary ">
                        <div class="row">
                            @csrf
                            <div class="form-group col-md-4">
                                <label for="desvqqgas_1"></label>No indica hora de inicio de la actividad.</label>
                                <input class="form-control" value="{{ $auditorias->desvqqgas_1 }}" disabled type="number" name="desvqqgas_1" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_2"></label>Permisos sin cerrar</label>
                                <input class="form-control" value="{{ $auditorias->desvqqgas_2 }}" disabled type="number" name="desvqqgas_2" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_3"></label>No indica prueba de gas</label>
                                <input class="form-control" value="{{ $auditorias->desvqqgas_3 }}" disabled type="number" name="desvqqgas_3" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                <input class="form-control" value="{{ $auditorias->desvqqgas_4 }}" disabled type="number" name="desvqqgas_4" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled  name="desvqqgas_5" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_6"></label>El saro no indica firma del supervisor responsable</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_6" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_7" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_8"></label> No presento el saro al momento de la auditoria</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_8" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_9"></label> No corresponde de el numero de permiso en el saro</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_9" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_10"></label> El saro no indica el numero de permiso</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_10" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_11"></label> No indica el equipo a intervenir</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_11" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_12"></label> Casillas sin llenar ó vacias.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_12" value="0" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_13"></label>No especifica herramientas manuales a utilizar.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_13" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_14"></label> No indica numero de Orden de Trabajo.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_14" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_15"></label> No indica EPP a utilizar.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_15" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvqqgas_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_4 }}" disabled name="desvqqgas_16" value="0" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card" id="pdvsa">
                    <h5 class="card-header"> Desviaciones PDVSA
                        <small class="float-right" id="suma_pdvsa"></small>
                    </h5>
                    <div class="card-body table-danger">
                        <div class="row">
                            @csrf

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_1"></label>No indica hora de inicio de la actividad.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_1 }}" disabled name="desvpdvsa_1" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_2"></label>Permisos sin cerrar</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_2 }}" disabled name="desvpdvsa_2" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_3"></label>No indica prueba de gas</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_3 }}" disabled name="desvpdvsa_3" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_4 }}" disabled name="desvpdvsa_4" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_5 }}" disabled name="desvpdvsa_5" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_6"></label>El saro no indica firma del supervisor responsable</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_6 }}" disabled name="desvpdvsa_6" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_7 }}" disabled name="desvpdvsa_7" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_8"></label> No presento el saro al momento de la auditoria</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_8 }}" disabled name="desvpdvsa_8" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_9"></label> No corresponde de el numero de permiso en el saro</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_9 }}" disabled name="desvpdvsa_9" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_10"></label> El saro no indica el numero de permiso</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_10 }}" disabled name="desvpdvsa_10" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_11"></label> No indica el equipo a intervenir</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_11}}" disabled name="desvpdvsa_11" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_12"></label> Casillas sin llenar ó vacias.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_12 }}" disabled name="desvpdvsa_12" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_13"></label>No especifica herramientas manuales a utilizar.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_13}}" disabled name="desvpdvsa_13" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_14"></label> No indica numero de Orden de Trabajo.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_14 }}" disabled name="desvpdvsa_14" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_15"></label> No indica EPP a utilizar.</label>
                                <input class="form-control" value="{{ $auditorias->desvpdvsa_15 }}" disabled type="number" name="desvpdvsa_15" value="0" />

                            </div>

                            <div class="form-group col-md-4">
                                <label for="desvpdvsa_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_16}}" disabled name="desvpdvsa_16" value="0" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group col-md-8">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" value="{{ $auditorias->observacion }}" disabled rows="1" required></textarea>
            </div>

            <div class="form-group col-md-4">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" type="date" value="{{ $auditorias->date}}" disabled name="date" value="0" />
            </div>
            <div class="col-md-12 text-center">
                <br>

                <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>

        </div>
    </div>
</form>

@endsection