$(
    function () {
        $('#checkTbc').on('change', eventoTbc);
        $('#checkAccidentes').on('change', eventoAccidentes);
        $('#checkVenereas').on('change', eventoVenereas);
        $('#checkAlergias').on('change', eventoAlergias);
        $('#checkDiabetes').on('change', eventoDiabetes);
        $('#checkDesmayos').on('change', eventoDesmayos);
        $('#checkConvulsiones').on('change', eventoConvulsiones);
        $('#checkCefaleas').on('change', eventoCefaleas);
        $('#checkHipertension').on('change', eventoHipertension);
        $('#checkOperaciones').on('change', eventoOperaciones);
        $('#checkBronquiales').on('change', eventoBronquiales);
        $('#checkVomitos').on('change', eventoVomitos);

        function eventoTbc() {
            // $(this)-> Hace referencia al elemento que origina el evento $('#tbc'), .val()-> al valor que tiene el elemento
            // true-> quitar, false->asignar
            var x = $(this).is(":checked");
            //alert(x);
            $("#tbc").prop('disabled', !x);
        }

        function eventoAccidentes() {
            var x = $(this).is(":checked");
            $("#accidentes").prop('disabled', !x);
        }
        function eventoVenereas() {
            var x = $(this).is(":checked");
            alert(x);
            $("#venereas").prop('disabled', !x);
        }
        function eventoAlergias() {
            var x = $(this).is(":checked");
            $("#alergias").prop('disabled', !x);
        }
        function eventoDiabetes() {
            var x = $(this).is(":checked");
            $("#diabetes").prop('disabled', !x);
        }
        function eventoDesmayos() {
            var x = $(this).is(":checked");
            $("#desmayos").prop('disabled', !x);
        }
        function eventoConvulsiones() {
            var x = $(this).is(":checked");
            $("#convulsiones").prop('disabled', !x);
        }
        function eventoCefaleas() {
            var x = $(this).is(":checked");
            $("#cefaleas").prop('disabled', !x);
        }
        function eventoHipertension() {
            var x = $(this).is(":checked");
            $("#hipertension").prop('disabled', !x);
        }
        function eventoOperaciones() {
            var x = $(this).is(":checked");
            $("#operaciones").prop('disabled', !x);
        }
        function eventoBronquiales() {
            var x = $(this).is(":checked");
            $("#bronquiales").prop('disabled', !x);
        }
        function eventoVomitos() {
            var x = $(this).is(":checked");
            $("#vomitos").prop('disabled', !x);
        }
    }

);