$(busquedap());

    
    function busquedap(buscarp){
        $.ajax({
            type: 'POST',
            url: '../../controlador/listaproveedor.php',
            data: {'buscarp': buscarp},
            
        })
        .done(function(resultado){
            $('#listaProveedor').html(resultado)
        })
        .fail(function(){
            alert('Error')
        })

    }
    $(document).on('keyup','#buscarp', function(){
        let buscarp = $('#buscarp').val()
        if(buscarp !=''){
            busquedap(buscarp);
        }else{
            busquedap();
        }
    })


