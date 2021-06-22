
function listaClientes(){
    var esperar = 1000;
        $.ajax({
                url:("./clientes.php"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                    }, esperar
                );
            }
        });
    };

function empleados(){
    var esperar = 1000;
        $.ajax({
            url:("./empleados.php"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function inventario(){
    var esperar = 1000;
        $.ajax({
            url:("./inventario.php"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function timeline(){
    var esperar = 1000;
        $.ajax({
            url:("./timeline.html"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function mantenimientos(){
    var esperar = 1000;
        $.ajax({
            url:("./mantenimientos.html"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function proveedores(){
    var esperar = 1000;
        $.ajax({
            url:("./proveedores.html"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function ventas(){
    var esperar = 1000;
        $.ajax({
            url:("./ventas.html"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
function pedidos(){
    var esperar = 1000;
        $.ajax({
            url:("./pedidos.html"),
                beforeSend: function(){
                    $('#contenido').text('Cargando...');
                },
                success : function(data){
                    setTimeout(function(){
                        $('#contenido').html(data);
                }, esperar
            );
        }
    });
};
