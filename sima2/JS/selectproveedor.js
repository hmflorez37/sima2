$(document).ready(function() {

    $.post("../../controlador/controlajax.php?proveedor=combo", function(data, status) {
        $('#proveedor').html(data);
    });

});