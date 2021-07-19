$(busquedac());

    
    function busquedac(buscarc){
        $.ajax({
            type: 'POST',
            url: '../../controlador/listaClientes.php',
            data: {'buscarc': buscarc},
            
        })
        .done(function(resultado){
            $('#tablacliente').html(resultado)
        })
        .fail(function(){
            alert('Error')
        })

    }
    $(document).on('keyup','#buscarc', function(){
        let buscarc = $('#buscarc').val()
        if(buscarc !=''){
            busquedac(buscarc);
        }else{
            busquedac();
        }
    })


