$(busquedae());

    
    function busquedae(buscare){
        $.ajax({
            type: 'POST',
            url: '../../controlador/listaEmpleados.php',
            data: {'buscare': buscare},
            
        })
        .done(function(resultado){
            $('#listaEmpleados').html(resultado)
        })
        .fail(function(){
            alert('Error')
        })

    }
    $(document).on('keyup','#buscare', function(){
        let buscare = $('#buscare').val()
        if(buscare !=''){
            busquedae(buscare);
        }else{
            busquedae();
        }
    })

