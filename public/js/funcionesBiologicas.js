$(
    function () {
        $('#checkApetito').on('change', eventoApetito);
        $('#checkSueño').on('change', eventoSueño);
        $('#checkSed').on('change', eventoSed);
        $('#checkOrina').on('change', eventoOrina);
        $('#checkMenarquia').on('change', eventoMenarquia);
        $('#checkCatamenial').on('change', eventoCatamenial);
        $('#checkRegla').on('change', eventoRegla);
        $('#checkGravidez').on('change', eventoGravidez);


        function eventoApetito() {
            var x = $(this).is(":checked");
            $('#apetito').prop('disabled', !x);
        }
        function eventoSueño() {
            var x = $(this).is(":checked");
            $('#sueño').prop('disabled', !x);
        }
        function eventoSed() {
            var x = $(this).is(":checked");
            $('#sed').prop('disabled', !x);
        }
        function eventoOrina() {
            var x = $(this).is(":checked");
            $('#orina').prop('disabled', !x);
        }
        function eventoMenarquia() {
            var x = $(this).is(":checked");
            $('#menarquia').prop('disabled', !x);
        }
        function eventoCatamenial() {
            var x = $(this).is(":checked");
            $('#catamenial').prop('disabled', !x);
        }
        function eventoRegla() {
            var x = $(this).is(":checked");
            $('#regla').prop('disabled', !x);
        }
        function eventoGravidez() {
            var x = $(this).is(":checked");
            $('#gravidez').prop('disabled', !x);
        }
    }


);