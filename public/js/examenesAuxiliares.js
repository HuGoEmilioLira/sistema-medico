
/**
 * Created by Tosh on 24/10/2016.
 */
$(function () {

    $('#form_auxiliary_exams').on('submit',eventoExamenesAuxiliares);

    function eventoExamenesAuxiliares() {
        event.preventDefault();
        var description = $('#descriptionEa').val();
        //alert(description);
        var datosEnviados = $('#form_auxiliary_exams').serialize();

        $.ajax({
            type: 'POST',
            url: '../../pacientes/examenes-auxiliares',
            // Un objeto con los datos de interes
            data: datosEnviados,
            dataType: 'json',
            encode: true,
            //success es para la respuesta del servidor
            success: function(data){
                //console.log(data);
                $('#auxiliary_exams').append('<tr>'+
                    '<td>'+data.description+'</td>'+
                    '<td>'+data.created_date+'</td>'+
                    '<td>'+
                    '<button class="btn btn-danger">Eliminar</button>'+
                    '</td>'+
                    '</tr>');
                $('#descriptionEa').val('');
            }
        });



    }

});
