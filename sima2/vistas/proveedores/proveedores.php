<?php
    include("../../modelos/database.php");
    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");

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
                <div class="col- form-check ">
                <!-- Button action modal -->
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    nuevo
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">nuevo proveedor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="number" class="form-control" id="validationCustom01" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="nombre completo" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" id="validationCustom04" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="ciudad" class="form-control" placeholder="Ingrese Ciudad" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="marca" class="form-control" placeholder="marca que provee" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                        
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <button class="btn btn-primary" type="reset">limpiar</button>
    
                                    </div>
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
        <ul class="nav nav-tabs ">
            <li class="nav-item">
                <a class="nav-link " id="btn-search"><i class = "zmdi zmdi-search"> </i></a>
            </li>
            <input class="form-control form-control-dark w-75" type="text" placeholder="Search" aria-label="Search">
        </ul>  
    </div>
     
    <!--tabla-->
    <div class="col-12 tabla">
        <div class="tabla-Proveedores">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table">
                        <th scope="col">DOC</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">MARCA_PROV</th>
                        <th scope="col">ID_PROV</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1056428754</td>
                        <td>JAVIER</td>
                        <td>310254687</td>
                        <td>BOGOTA</td>
                        <td>RENAULT</td>
                        <td>001</td>
                        <td> <button class="btn btn-warning" type="#"><i class = "zmdi zmdi-edit"> </i></button> </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        </div>
        </div>
    </div>
</body>