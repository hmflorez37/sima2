$(busqueda());

    
    function busqueda(buscar){
        $.ajax({
            type: 'POST',
            url: '../../controlador/listaajax.php',
            data: {'buscar': buscar},
            
        })
        .done(function(resultado){
            $('#lista').html(resultado)
        })
        .fail(function(){
            alert('Error')
        })

    }
    $(document).on('keyup','#buscar', function(){
        let buscar = $('#buscar').val()
        if(buscar !=''){
            busqueda(buscar);
        }else{
            busqueda();
        }
    })


