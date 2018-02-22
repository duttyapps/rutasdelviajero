/**
 * Created by Carlos on 12/12/2017.
 */
$(document).ready(function() {

    new WOW().init();

    $.fn.datepicker.defaults.format = "dd/mm/yyyy";
    $.fn.datepicker.defaults.language = "es";

    $('#fecha_ida,#fecha_regreso').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#input-origen').typeahead({source: ['as']});

    var fecha_regreso = $("#fecha_regreso").val();

    $('input[type=radio][name=rd_tipo]').change(function() {
        if (this.value == '1') { //ida/vuelta
            $("#fecha_regreso").prop('disabled', false);
            $("#fecha_regreso").val(fecha_regreso);
        }
        else if (this.value == '2') { //ida
            $("#fecha_regreso").prop('disabled', true);
            $("#fecha_regreso").val('');
        }
    });
});