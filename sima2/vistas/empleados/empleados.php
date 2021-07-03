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
    <title>SIMA</title>
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
                            <h5 class="modal-title" id="exampleModalLabel">crear empleado</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="nombre" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="apellido" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" id="validationCustom03" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" id="validationCustom04" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="direccion" class="form-control" placeholder="Ingrese Direccion Residencia" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" placeholder="Ingrese Email" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="cargo" class="form-control" placeholder="cargo" required>  
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
        <div class="tabla-Empleados">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table">
                        <th scope="col">DOC</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">DIRECION</th>
                        <th scope="col">CARGO</th>
                        <th scope="col">OPCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
            $consulta="SELECT * from empleado";
            $resultado=mysqli_query($conn,$consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            
                <tr>
                    <td><?php echo $mostrar ['id_empleado']?></td>
                    <td><?php echo $mostrar ['nombre_empleado']?></td>
                    <td><?php echo $mostrar ['apellido_empleado']?></td>
                    <td><?php echo $mostrar ['telefono_empleado']?></td>
                    <td><?php echo $mostrar ['direccion_empleado']?></td>
                    <td><?php echo $mostrar ['cargo_empleado']?></td>
                    <td> <button class="btn btn-warning" type="#"><i class = "zmdi zmdi-edit"> </i></button> </td>
                </tr>
            <?php
            }
            ?>
                </tbody>
                
            </table>
        </div>
        </div>
        </div>
    </div>
</body>