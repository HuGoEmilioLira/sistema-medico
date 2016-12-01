<section class="tab-section" id="examenes_auxiliares" style="display: none">
    <div class="panel panel-warning">
        <div class="panel-heading">Exámenes Auxiliares</div>
        <div class="panel-body">

            <form action="" id="form_auxiliary_exams">
                {{ csrf_field() }}
            <input type="hidden" name="patient_id" value="{{$patient->id}}">
            <div class="form-group">
                <label for="description">Ingrese Observación</label>
                <textarea id="descriptionEa" name="description" class="form-control"></textarea>
            </div>
            <button id="btn_add_auxiliary_exam" class="btn btn-primary pull-right" type="submit">
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
                <tbody id="auxiliary_exams">
                @foreach( $auxiliaryExams as $auxiliaryExam)
                <tr>
                    <td> {{ $auxiliaryExam->description }} </td>
                    <td> {{ $auxiliaryExam->created_date }}</td>
                    <td>  <button class="btn btn-danger">Eliminar</button>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</section>
