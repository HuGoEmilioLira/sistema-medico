$( function () {
    $('#checkCraneo').on('change', eventoCraneo);
    $('#checkCuero').on('change', eventoCuero);
    $('#checkOidos').on('change', eventoOidos);
    $('#checkNariz').on('change', eventoNariz);
    $('#checkBoca').on('change', eventoBoca);
    $('#checkPa').on('change', eventoPa);
    $('#checkPulso').on('change', eventoPulso);
    $('#checkRespiracion').on('change', eventoRespiracion);
    $('#checkTemperatura').on('change', eventoTemperatura);
    $('#checkPeso').on('change', eventoPeso);
    $('#checkRespiratorio').on('change', eventoRespiratorio);
    $('#checkCardiovascular').on('change', eventoCardiovascular);
    $('#checkAbdomen').on('change', eventoAbdomen);
    $('#checkUrinario').on('change', eventoUrinario);
    $('#checkLocomotor').on('change', eventoLocomotor);
    
    function eventoCraneo() {
        var x = $(this).is(":checked");
        $('#craneo').prop('disabled', !x)
    }
    function eventoCuero() {
        var x =$(this).is(":checked");
        $('#cuero').prop('disabled', !x)
    }
    function eventoOidos() {
        var x =$(this).is(":checked");
        $('#oidos').prop('disabled', !x)
    }
    function eventoNariz() {
        var x =$(this).is(":checked");
        $('#nariz').prop('disabled', !x)
    }
    function eventoBoca() {
        var x =$(this).is(":checked");
        $('#boca').prop('disabled', !x)
    }
    function eventoPa() {
        var x =$(this).is(":checked");
        $('#pa').prop('disabled', !x)
    }
    function eventoPulso() {
        var x =$(this).is(":checked");
        $('#pulso').prop('disabled', !x)
    }
    function eventoRespiracion() {
        var x =$(this).is(":checked");
        $('#respiracion').prop('disabled', !x)
    }
    function eventoTemperatura() {
        var x =$(this).is(":checked");
        $('#temperatura').prop('disabled', !x)
    }
    function eventoPeso() {
        var x =$(this).is(":checked");
        $('#peso').prop('disabled', !x)
    }
    function eventoRespiratorio() {
        var x =$(this).is(":checked");
        $('#respiratorio').prop('disabled', !x)
    }
    function eventoCardiovascular() {
        var x =$(this).is(":checked");
        $('#cardiovascular').prop('disabled', !x)
    }
    function eventoAbdomen() {
        var x =$(this).is(":checked");
        $('#abdomen').prop('disabled', !x)
    }
    function eventoUrinario() {
        var x =$(this).is(":checked");
        $('#urinario').prop('disabled', !x)
    }
    function eventoLocomotor() {
        var x =$(this).is(":checked");
        $('#locomotor').prop('disabled', !x)
    }
});