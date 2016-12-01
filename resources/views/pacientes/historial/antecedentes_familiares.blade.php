<section class="tab-section" id="antecedentes_familiares" style="display: none">

    <div class="panel panel-warning">
        <div class="panel-heading text-center">Antecedentes Familiares</div>
        <div class="panel-body">
            <form action="" id="form_family_history">
                {{ csrf_field() }}
                <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="form-group">
                    <label for="description">Ingrese Observación</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <button id="btn_add_family_history" class="btn btn-primary pull-right" type="submit">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </form>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Observación</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
                </thead>

                <tbody id="family_histories">

                @foreach( $familyHistories as $familyHistory)
                    <tr>
                        <td> {{ $familyHistory->description }} </td>
                        <td> {{ $familyHistory->created_date }}</td>
                        <td>
                            <button class="btn btn-danger" data-delete="{{ $familyHistory->id }}" >Eliminar</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>


</section>