<section class="tab-section" id="datos_generales">
    {{--<h1>datos generales</h1>--}}
    <div class="panel panel-info">
        <div class="panel-heading text-center">Datos Generales</div>
        <div class="panel-body">

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" class="form-control" value="{{ $patient->nombres }}" readonly>
            </div>

            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="Apellidos" class="form-control" value="{{ $patient->apellidos }}" readonly>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="" id="" class="form-control" disabled>
                    <option value="masculino" @if('masculino'==$patient->sexo) selected @endif>Masculino</option>
                    <option value="femenino" @if('femenino'==$patient->sexo) selected @endif>Femenino</option>
                    <option value="otros" @if('otros'==$patient->sexo) selected @endif>Otros</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ocupacion">Ocupación</label>
                <input type="text" name="ocupacion" class="form-control" value="{{$patient->ocupacion}}" readonly>
            </div>

            <div class="form-group">
                <label for="estadocivil">Estado Civíl</label>
                <select name="" id="" class="form-control" disabled>
                    <option value="soltero" @if('soltero'==$patient->estado_civil) selected @endif>Soltero</option>
                    <option value="casado" @if('casado'==$patient->estado_civil) selected @endif>Casado</option>
                    <option value="viudo" @if('viudo'==$patient->estado_civil) selected @endif>Viudo</option>
                    <option value="divorciado" @if('divorciado'==$patient->estado_civil) selected @endif>Divorciado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dni">D.N.I</label>
                <input type="text" name="dni" class="form-control" value="{{$patient->dni}}" readonly>
            </div>

            <div class="form-group">
                <label for="fnacimiento">Fecha De Nacimiento</label>
                <input type="date" name="fnacimiento" class="form-control" value="{{$patient->fnacimiento}}" readonly>
            </div>

            <div class="form-group">
                <label for="lnacimiento">Lugar De Nacimiento</label>
                <input type="text" name="lnacimiento" class="form-control" value="{{ $patient->lnacimiento }}" readonly>
            </div>

            <div class="form-group">
                <label for="lprocedencia">Lugar De Procedencia</label>
                <input type="text" name="lprocedencia" class="form-control" value="{{ $patient->lprocedencia }}" readonly>
            </div>

            <div class="form-group">
                <label for="Direccióm">Dirección</label>
                <input type="text" name="Direccióm" class="form-control" value="{{ $patient->direccion }}" readonly>
            </div>

            <div class="form-group">
                <label for="fijo">Telefonía Fija</label>
                <input type="text" name="fijo" class="form-control" value="{{ $patient->fijo }}" readonly>
            </div>

            <div class="form-group">
                <label for="movil">Telefonía Móvil</label>
                <input type="text" name="movil" class="form-control" value="{{ $patient->movil }}" readonly>
            </div>

        </div>
    </div>
</section>