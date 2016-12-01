<section class="tab-section" id="antecedentes_morbidos" style="display: none">


    <div class="panel panel-success">
        <div class="panel-heading text-center">Antecedentes Patógenos</div>
        <div class="panel-body">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">T.B.C:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkTbc" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="tbc" id="tbc" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Accidentes:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkAccidentes" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="accidentes" id="accidentes" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Enfermedades venéreas:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkVenereas" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="venereas" id="venereas" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Alérgias:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkAlergias" value="">Marcar si presenta:</label>
                        </div>
                        <textarea name="alergias" id="alergias" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Diabetes:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkDiabetes" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="diabetes" id="diabetes" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Desmayos:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkDesmayos" value="">Marcar si presenta:</label>
                        </div>
                        <textarea name="desmayos" id="desmayos" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Convulsiones:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkConvulsiones" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="convulsiones" id="convulsiones" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Cefaleas:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkCefaleas" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="cefaleas" id="cefaleas" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Hipertensión:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkHipertension" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="hipertension" id="hipertension" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Operaciones:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkOperaciones" value="">Marcar si presenta:</label>
                        </div>
                        <textarea name="operaciones" id="operaciones" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Bronquiales:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox"  id="checkBronquiales" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="bronquiales" id="bronquiales" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Vómitos:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkVomitos" value="">Marcar si presenta:</label>

                        </div>
                        <textarea name="vomitos" id="vomitos" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@section('scripts')
    {{--Tomar el blade padre y luego el js particular--}}
    @parent
    <script src="{{ asset('/js/antecedentesMorbidos.js') }}"></script>
@endsection