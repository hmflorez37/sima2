<?php
    include("../../modelos/database.php");
    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");
    include("../../modelos/listar_prod.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
    <div class="col-12 d-inline-flex" >
        <!--container modal-->
        <div id="contenido" >
            <div class="row">
                <div class="col-6 form-check ">
                <!-- Button action modal -->
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    crear
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">nuevo producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" method="POST" action="../../modelos/registrarprod.php" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label"></label>
                                        <input type="number" class="form-control" id="validationCustom01"name="id" placeholder="serial" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02"name="nombre" placeholder="nom_item" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="validationCustom03"name="marca" placeholder="marca" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" id="validationCustom04"name="fechaven" placeholder="fecha vencimiento" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" name="cantidad" class="form-control"name="cantidad" placeholder="cantidad" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit"name="guardar">Guardar</button>
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
            <!--modal 2-->
            <div class="col-6 form-check ">
                <!-- Button action modal -->
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modaladd">
                    agregar
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">agregar cantidad</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label"></label>
                                        <input type="text" class="form-control" id="campo" placeholder="nombre" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="numero" placeholder="cantidad" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
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
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link " id="btn-search"><i class = "zmdi zmdi-search"> </i></a>
                </li>
                <input class="form-control form-control-dark w-75" type="text" placeholder="Search" aria-label="Search">
            </ul>        
    
    </div>
    <!--tabla-->
    <div class="col-12 tabla">
        <div class="tabla-Inventario">
            <table class="table table-striped table-bordered" style="text-align: center;">
                <caption><label>Articulos</label></caption>
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>MARCA</td>
                    <td>FECHA VENCIMIENTO</td>
                    <td>CANTIDAD</td>
                </tr>
                <!--llenado de tablas-->
            <?php
            echo listarprod();
            ?>
            </table>
        </div>
        </div>
        </div>
    </div>
</body>