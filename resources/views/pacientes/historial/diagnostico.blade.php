<section class="tab-section" id="diagnostico" style="display: none">
    <div class="panel panel-success">
        <div class="panel-heading">Diagnósticos</div>
        <div class="panel-body">

            <div class="form-group">
                <label for="description">Ingrese diagnóstico:</label>
                <textarea id="description" class="form-control"></textarea>
            </div>
            <button id="btn_add_family_history" class="btn btn-primary pull-right">
                <span class="glyphicon glyphicon-plus"></span>
            </button>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Observación</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody id="family_histories">
                <tr>
                    <td>asd</td>
                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>