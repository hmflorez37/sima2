

$(document).ready(function(){

    $.post("../../controlador/controlajax.php?op=combo",function(data, status){
    $('#clientev').html(data);
});
    
}); 
