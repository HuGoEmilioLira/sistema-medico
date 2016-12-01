<section class="tab-section" id="funciones_biologicas" style="display: none">

    <div class="panel panel-success">
        <div class="panel-heading text-center">Funciones Biológicas</div>
        <div class="panel-body">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Apetito:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkApetito" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="apetito" id="apetito" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Sueño:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkSueño" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="sueño" id="sueño" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Sed:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkSed" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="sed" id="sed" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Orina:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkOrina" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="orina" id="orina" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Menarquia:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkMenarquia" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="menarquia" id="menarquia" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Régimen catamenial:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkCatamenial" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="catamenial" id="catamenial" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Última regla:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkRegla" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="regla" id="regla" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Para gravidez:</div>
                    <div class="panel-body">
                        <div class="checkbox text-center">
                            <label><input type="checkbox" id="checkGravidez" value="">Marcar si presenta</label>
                        </div>
                        <textarea name="gravidez" id="gravidez" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@section('scripts')
    @parent
    <script src="{{ asset('/js/funcionesBiologicas.js') }}"></script>
@endsection