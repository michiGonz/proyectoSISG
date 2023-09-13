<div class="container">
    <h2>Editar Registro de Opsa Acto inseguro</h2>
</div>

<div class="container">
    <form method="POST" class="row" action="{{ route('actoinseguro.index') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-md-6 table-primary" >
            <h6>Reacciones de las personas</h6>
            <label for= "AE" >Ajustan su EPP</label>
            <input class="form-control" value="{{ $actoinseguro->AE }}"  type="number" name="AE"  />
            <label for=  "CP" >Cambian de posicion</label>
            <input class="form-control" value="{{ $actoinseguro->CP }}"  type="number" name="CP" />
            <label for= "RT" >Reacomodan su trabajo</label>
            <input class="form-control" value="{{ $actoinseguro->RT }}"  type="number" name="RT" />
            <label for= "DT">Dejan de Trabajar</label>
            <input class="form-control" value="{{ $actoinseguro->DT }}" type="number" name="DT"  />
            <label for=  "PT" >Colocan puesta a tierra</label>
            <input class="form-control" value="{{ $actoinseguro->PT }}" type="number" name="PT"  />
            <label for= "CB">Colocan bloqueos</label>
            <input class="form-control" value="{{ $actoinseguro->CB }}"  type="number" name="CB"  />

        </div>

        <div class="form-group col-md-6 table-danger" >
            <h6>Equipo de proteccion personal</h6>
            <label for= "C" >CABEZA</label>
            <input class="form-control" value="{{ $actoinseguro->C }}" type="number" name="C" value=0 />
            <label for=  "OC" >Ojos y Cara</label>
            <input class="form-control" value="{{ $actoinseguro->OC }}" type="number" name="OC"  />
            <label for= "OI">Oidos</label>
            <input class="form-control" value="{{ $actoinseguro->OI }}" type="number"  name="OI" />
            <label for= "AR">Aparato respiratorio</label>
            <input class="form-control" value="{{ $actoinseguro->AR }}" type="number" name="AR" />
            <label for=  "BM" >Brazos y manos</label>
            <input class="form-control" value="{{ $actoinseguro->BM }}" type="number" name="BM" />
            <label for= "TR">Tronco</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->TR }}" name="TR"  />
            <label for= "PP">Piernas y pies</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->PP }}" name="PP"  />
        </div>

        <div class="form-group col-md-6 table-warning" >
            <h6>Posiciones de las personas</h6>
            <label for= "GO" >Golpear contra objetos</label>
            <input class="form-control" value="{{ $actoinseguro->GO }}" type="number" name="GO" />
            <label for=  "AGO" >ser golpeados por objetos</label>
            <input class="form-control" value="{{ $actoinseguro->AGO }}"  type="number" name="AGO" />
            <label for= "QAT" >Quedar atrapado en,dentro de o entre objetos</label>
            <input class="form-control" value="{{ $actoinseguro->QAT }}" type="number" name="QAT"  />
            <label for= "CDA">Caidas</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->CDA }}" name="CDA"  />
            <label for=  "CTE" >Contacto con temperaturas extremas</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->CTE }}" name="CTE"  />
            <label for= "CCE">Contacto con corriente electrica</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->CCE }}" name="CCE" />
            <label for= "IAI" >Inhalacion, adsorcion o ingestion de una sustancia peligrosa</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->IAI }}" name="IAI" />
            <label for= "SE">Sobre-esfuerzo</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->SE }}"name="SE"  />
        </div>

        <div class="form-group col-md-6 table-secondary" >
            <h6>Herramientas y Equipo</h6>
            <label for= "IT" >Inadecuados para el trabajo</label>
            <input class="form-control" value="{{ $actoinseguro->IT }}"type="number" name="IT" />
            <label for=  "EFI" >Empleados en forma incorrecta</label>
            <input class="form-control" value="{{ $actoinseguro->EFI }}" type="number" name="EFI" />
            <label for= "CI" >En condiciones inseguras</label>
            <input class="form-control" value="{{ $actoinseguro->CI }}" type="number" name="CI"  />
        </div>

        <div class="form-group col-md-6 table-dark" >
            <h6>Procedimientos, orden y limpieza</h6>
            <label for= "PI" >Procedimientos inadecuados</label>
            <input class="form-control" value="{{ $actoinseguro->PI }}" type="number" name="PI" />
            <label for=  "PNC" >Procedimientos no conocidos ni entendidos</label>
            <input class="form-control" value="{{ $actoinseguro->PNC }}" type="number" name="PNC" />
            <label for= "PNSC" >Procedimientos no se cumplen</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->PNCS }}"name="PNSC"  />
            <label for= "EOLI" >Estandares de orden y limpieza inadecuados</label>
            <input class="form-control" value="{{ $actoinseguro->EOLI }}" disabled="true"type="number" name="EOLI" />
            <label for= "EOLC" >Estandares de orden y limpieza no se cumplen</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->EOLC }}" disabled="true"name="EOLC" />
        </div>

            <div class="form-group col-md-6 table-success" >
            <h6>Ambiente</h6>
            <label for= "TIP" >Transferir incorrectamente productos o materiales liquidos y solidos</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->TIP }}" name="TIP" />
            <label for=  "AIP" >Almacenar incorrectamente materiales solidos, liquidos o equipos</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->AIP }}" name="AIP" />
            <label for= "CVI" >Corte de vegetación inadecuado</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->CIV }}" name="CVI"  />
            <label for= "PHD" >Productos y/o materiales sin hojas de datos del producto</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->PHD}}" name="PHD" />
            <label for= "LEHPI" >Lavar equipo o herramienta con productos inadecuadosn</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->LEHPI }}" name="LEHPI" />
            <label for= "ARA" >Afectacion de cursos de agua</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->ARA }}" name="ARA" />
            <label for= "MDP" >Mal uso y/o desperdicios de productos</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->MDO }}" name="MDP" />
            <label for= "LEHPI" >Lavar equipo o herramienta con productos inadecuadosn</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->LEHPI }}" name="LEHPI" />
            <label for= "ASUE" >Afectación de suelos</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->ASUE }}" name="ASUE" />
            <label for= "AFAS" >Afectación de faunas silvestre</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->AFAS }}" name="AFAS" />
            <label for= "MAND" >Manejo de desechos</label>
            <input class="form-control" type="number" value="{{ $actoinseguro->MAND }}" name="MAND" />
        </div>

        <div class="form-group col-md-6">
            <label for="total">total</label>
            <textarea type="text " name="total" value="{{ $actoinseguro->total}}" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <textarea type="text " name="observacion" value="{{ $actoinseguro->observacion }}" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" value="{{ $actoinseguro->date }}"type="date" name="date" value="" />
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Crear Registro</button>
            <a href="{{ route('actoinseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
