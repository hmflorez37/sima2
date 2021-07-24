
$(document).ready(function(){

    $.post("../../controlador/controlajax.php?pro=combo",function(data, status){
    $('#productov').html(data);
});
    
}); 
