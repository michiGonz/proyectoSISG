@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Mostrar Registro de Opsa Acto inseguro</h2>
    <div class="card-body">
        <form method="POST" class="row" action="{{ route('actoinseguro.update', $actoinseguro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-md-6 card-body table-primary">
                <h6>Reacciones de las personas</h6>
                <label for="AE">Ajustan su EPP</label>
                <input disabled class="form-control" value="{{ $actoinseguro->AE }}" type="number" name="AE" value=0 />
                <label for="CP">Cambian de posicion</label>
                <input disabled class="form-control" value="{{ $actoinseguro->CP }}" type="number" name="CP" value=0 />
                <label for="RT">Reacomodan su trabajo</label>
                <input disabled class="form-control" value="{{ $actoinseguro->RT }}" type="number" name="RT" value=0 />
                <label for="DT">Dejan de Trabajar</label>
                <input disabled class="form-control" value="{{ $actoinseguro->DT }}" type="number" name="DT" value=0 />
                <label for="PT">Colocan puesta a tierra</label>
                <input disabled class="form-control" value="{{ $actoinseguro->PT }}" type="number" name="PT" value=0 />
                <label for="CB">Colocan bloqueos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->CB }}" type="number" name="CB" value=0 />

            </div>

            <div class="form-group col-md-6 card-body table-danger">
                <h6>Equipo de proteccion personal</h6>
                <label for="C">CABEZA</label>
                <input disabled class="form-control" value="{{ $actoinseguro->C }}" type="number" name="C" value=0 />
                <label for="OC">Ojos y Cara</label>
                <input disabled class="form-control" value="{{ $actoinseguro->OC }}" type="number" name="OC" value=0 />
                <label for="OI">Oidos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->OI }}" type="number" name="OI" value=0 />
                <label for="AR">Aparato respiratorio</label>
                <input disabled class="form-control" value="{{ $actoinseguro->AR }}" type="number" name="AR" value=0 />
                <label for="BM">Brazos y manos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->BM }}" type="number" name="BM" value=0 />
                <label for="TR">Tronco</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->TR }}" name="TR" value=0 />
                <label for="PP">Piernas y pies</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->PP }}" name="PP" value=0 />
            </div>

            <div class="form-group col-md-6 card-body table-warning">
                <h6>Posiciones de las personas</h6>
                <label for="GO">Golpear contra objetos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->GO }}" type="number" name="GO" value=0 />
                <label for="AGO">ser golpeados por objetos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->AGO }}" type="number" name="AGO" value=0 />
                <label for="QAT">Quedar atrapado en,dentro de o entre objetos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->QAT }}" type="number" name="QAT" value=0 />
                <label for="CDA">Caidas</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->CDA }}" name="CDA" value=0 />
                <label for="CTE">Contacto con temperaturas extremas</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->CTE }}" name="CTE" value=0 />
                <label for="CCE">Contacto con corriente electrica</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->CCE }}" name="CCE" value=0 />
                <label for="IAI">Inhalacion, adsorcion o ingestion de una sustancia peligrosa</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->IAI }}" name="IAI" value=0 />
                <label for="SE">Sobre-esfuerzo</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->SE }}" name="SE" value=0 />
            </div>

            <div class="form-group col-md-6 card-body table-secondary">
                <h6>Herramientas y Equipo</h6>
                <label for="IT">Inadecuados para el trabajo</label>
                <input disabled class="form-control" value="{{ $actoinseguro->IT }}" type="number" name="IT" value=0 />
                <label for="EFI">Empleados en forma incorrecta</label>
                <input disabled class="form-control" value="{{ $actoinseguro->EFI }}" type="number" name="EFI" value=0 />
                <label for="CI">En condiciones inseguras</label>
                <input disabled class="form-control" value="{{ $actoinseguro->CI }}" type="number" name="CI" value=0 />
            </div>

            <div class="form-group col-md-6 card-body table-dark">
                <h6>Procedimientos, orden y limpieza</h6>
                <label for="PI">Procedimientos inadecuados</label>
                <input disabled class="form-control" value="{{ $actoinseguro->PI }}" type="number" name="PI" value=0 />
                <label for="PNC">Procedimientos no conocidos ni entendidos</label>
                <input disabled class="form-control" value="{{ $actoinseguro->PNC }}" type="number" name="PNC" value=0 />
                <label for="PNSC">Procedimientos no se cumplen</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->PNSC }}" name="PNSC" value=0 />
                <label for="EOLI">Estandares de orden y limpieza inadecuados</label>
                <input disabled class="form-control" value="{{ $actoinseguro->EOLI }}" type="number" name="EOLI" value=0 />
                <label for="EOLC">Estandares de orden y limpieza no se cumplen</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->EOLC }}" name="EOLC" value=0 />
            </div>

            <div class="form-group col-md-6 card-body table-success">
                <h6>Ambiente</h6>
                <label for="TIP">Transferir incorrectamente productos o materiales liquidos y solidos</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->TIP }}" name="TIP" value=0 />
                <label for="AIP">Almacenar incorrectamente materiales solidos, liquidos o equipos</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->AIP }}" name="AIP" value=0 />
                <label for="CVI">Corte de vegetación inadecuado</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->CVI }}" name="CVI" value=0 />
                <label for="PHD">Productos y/o materiales sin hojas de datos del producto</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->PHD}}" name="PHD" value=0 />
                <label for="LEHPI">Lavar equipo o herramienta con productos inadecuadosn</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->LEHPI }}" name="LEHPI" value=0 />
                <label for="ARA">Afectacion de cursos de agua</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->ARA }}" name="ARA" value=0 />
                <label for="MDP">Mal uso y/o desperdicios de productos</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->MDP }}" name="MDP" value=0 />
                <label for="LEHPI">Lavar equipo o herramienta con productos inadecuadosn</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->LEHPI }}" name="LEHPI" value=0 />
                <label for="ASUE">Afectación de suelos</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->ASUE }}" name="ASUE" value=0 />
                <label for="AFAS">Afectación de faunas silvestre</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->AFAS }}" name="AFAS" value=0 />
                <label for="MAND">Manejo de desechos</label>
                <input disabled class="form-control" type="number" value="{{ $actoinseguro->MAND }}" name="MAND" value=0 />
            </div>

            <div class="form-group col-md-6">
                <label for="total">total</label>
                <input disabled type="text " name="total" value="{{ $actoinseguro->total}}" class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label for="date">Fecha</label>
                <input disabled class="form-control" id="date" value="{{ $actoinseguro->date }}" type="date" name="date" value="" />
            </div>

            <div class="form-group col-md-12">
                <label for="observacion">Observacion</label>
                <textarea disabled type="text " name="observacion" class="form-control" required />{{ $actoinseguro->observacion }}</textarea>
            </div>

            <div class="form-group col-md-12 text-center">
                <a href="{{ route('actoinseguro.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection