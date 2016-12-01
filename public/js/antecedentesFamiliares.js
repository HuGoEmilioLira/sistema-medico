/**
 * Created by Tosh on 24/10/2016.
 */
$(function () {

        $('#form_family_history').on('submit',eventoAntecedenteFamiliar);
        //$('[data-delete]').on('click', eventoEliminar);
        $(document).on('click','[data-delete]', eventoEliminar);

        function eventoAntecedenteFamiliar() {
            event.preventDefault();
            var description = $('#description').val();
            //alert(description);
            var datosEnviados = $('#form_family_history').serialize();

            $.ajax({
                type: 'POST',
                url: '../../pacientes/antecedentes-familiares',
                // Un objeto con los datos de interes
                data: datosEnviados,
                dataType: 'json',
                encode: true,
                //success es para la respuesta del servidor
                success: function(data){
                    //console.log(data);
                    $('#family_histories').append('<tr>'+
                        '<td>'+data.description+'</td>'+
                        '<td>'+data.created_date+'</td>'+
                        '<td>'+
                        '<button class="btn btn-danger" data-delete="'+data.id+'" >Eliminar</button>'+
                        '</td>'+
                        '</tr>');
                    $('#description').val('');
                }
            });



        }
        function eventoEliminar(){
            // Tomo el valor del data-delete
            // '' -> es una cadena y me imprima esa cadena, sin '' es el valor
            var id = $(this).data('delete');
            alert(id);

        }

});
