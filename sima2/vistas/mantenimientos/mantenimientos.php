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
                            <h5 class="modal-title" id="exampleModalLabel">nuevo mantenimiento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="number" class="form-control" id="validationCustom01" placeholder="id_manto" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="cliente" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="placa" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
                                            <option value="A">CARRO</option>
                                            <option value="0">MOTO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="emp-asign" class="form-control" placeholder="empleado asignado" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" name="fecha ingreso" class="form-control" placeholder="fecha" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="observaciones" class="form-control" placeholder="observaciones" required>  
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
        <div class="tabla-Cliente">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table">
                        <th scope="col">MANTO</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">PLACA</th>
                        <th scope="col">TIPO VEHICULO</th>
                        <th scope="col">EMP-DESIGNADO</th>
                        <th scope="col">FECHA INGRESO</th>
                        <th scope="col">OBSERVACIONES</th>
                        <th scope="col">OPCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
            $consulta="SELECT * from manto";
            $resultado=mysqli_query($conn,$consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            
                <tr>
                    <td><?php echo $mostrar ['id_manto']?></td>
                    <td><?php echo $mostrar ['id_cliente']?></td>
                    <td><?php echo $mostrar ['id_placa']?></td>
                    <td><?php echo $mostrar ['tipo_vehi']?></td>
                    <td><?php echo $mostrar ['id_empleado']?></td>
                    <td><?php echo $mostrar ['fecha_ingreso']?></td>
                    <td><?php echo $mostrar ['observ']?></td>
                    <td> <button class="btn btn-warning" type="#"><i class = "zmdi zmdi-edit"> </i></button> </td>
                    
                </tr>
            <?php
            }
            ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <button class="btn btn-warning" type="#"><i class = "zmdi zmdi-edit"> </i></button> </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        </div>
        </div>
    </div>
</body>