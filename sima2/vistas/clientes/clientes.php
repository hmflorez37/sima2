<?php
    include("../../templates/menusup.php");
    include("../../templates/menulateral.php");
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
    <script src="../../JS/listacliente.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
    
    <div class="col-3" >
        <!--container modal-->
        <div id="contenido" >
            <div class="row">
                <div class="col- form-check ">
                <!-- Button action modal -->
                <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    nuevo
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">nuevo cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" method="POST" action="gestion.php"validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" value= ""name="nombre" placeholder="nombre" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" name="apellido" placeholder="apellido" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control"name="id" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" name="telefono" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="direccion"class="form-control" placeholder="Ingrese Direccion Residencia" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" placeholder="Ingrese Email" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit"name="accion"value="guardar">Guardar</button>
                                        <button class="btn btn-primary" type="reset">limpiar</button>
    
                                    </div>
                                </form> 
                            </div>

                            <div class="modal-footer">                 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div><div class="col-9">
        <form class="d-flex" method="post" action="">
        <input class="form-control me-2" type="text" placeholder="Search"name="buscarc" id="buscarc">
        </form>
        </div>
    </div>

    <div class="col-12 "id="tablacliente">

        </div>
    </div>
</body>