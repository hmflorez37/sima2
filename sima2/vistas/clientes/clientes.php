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
                            <h5 class="modal-title" id="exampleModalLabel">nuevo cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 needs-validation" method="POST" action="clientes.php"validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
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
                                        <input type="tel" class="form-control" name="celular" placeholder="tel" required>  
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
                                    <div class="col-md-12">
                                        <input type="text" name="ciudad" class="form-control" placeholder="Ingrese Ciudad" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit"name="guardar">Guardar</button>
                                        <button class="btn btn-primary" type="reset">limpiar</button>
    
                                    </div>
                                </form> 
                            </div>
    <!--metodo php-->
    <?php
        if(isset($_POST['guardar'])){
            if(strlen($_POST['id']) && strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['celular'])>=1  && strlen($_POST['direccion'])>=1 && strlen($_POST['email'])>=1){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $celular=$_POST['celular'];
                $direccion=$_POST['direccion'];
                $email=$_POST['email'];
                $consulta="INSERT INTO `cliente`(`id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`, `e-mail`) VALUES ('$id','$nombre','$apellido','$celular','$direccion','$email') ";
                $resultado=mysqli_query($conn,$consulta);
                if($resultado){
                    echo "guardado";
                }else{
                    echo "fallo";
                }
                
            }

        }
        
    ?>

                            <div class="modal-footer">                 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
            <form class="form_search"method="get" action="clientesbusqueda.php">
                <input class="form-control form-control-dark w-75" type="text" name="dato_busqueda" placeholder="Search">
                <button class="nav-item" type="submit"  name="buscar"><i class = "zmdi zmdi-search"> </i></button>
            </form>

    </div>
    <!--tabla-->
    <div class="col-12 tabla">
        <div class="tabla-Cliente">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table">
                        <th scope="col">DOC</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CELULAR</th>
                        <th scope="col">DIRECION</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $consulta="SELECT * from cliente";
            $resultado=mysqli_query($conn,$consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            
                <tr>
                    <td><?php echo $mostrar ['id_cliente']?></td>
                    <td><?php echo $mostrar ['nombre']?></td>
                    <td><?php echo $mostrar ['apellido']?></td>
                    <td><?php echo $mostrar ['telefono']?></td>
                    <td><?php echo $mostrar ['direccion']?></td>
                    <td><?php echo $mostrar ['e-mail']?></td>
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