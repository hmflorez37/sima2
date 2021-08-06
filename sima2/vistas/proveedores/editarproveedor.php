<?php
    session_start();
    include ("../../templates/menulateral.php");
    include ("../../templates/menusup.php");
    $id=(isset($_POST['id']))?$_POST['id'] :"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre'] :"";
    $ciudad=(isset($_POST['ciudad']))?$_POST['ciudad'] :"";
    $telefono=(isset($_POST['telefono']))?$_POST['telefono'] :"";
    $nombre_prov=(isset($_POST['nombre_prov']))?$_POST['nombre_prov'] :"";
    $email=(isset($_POST['email']))?$_POST['email'] :"";
?>

        <div id="contenido" >
            <div class="row">
                                <form class=" needs-validation" method="POST" action="gestionProveedores.php"validate>
                                <div id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Proveedor</h5>
    </div>
    <div class="modal-body">
        <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" value="<?php echo $nombre?>" name="nombre" placeholder="nombre" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" value="<?php echo $ciudad?>" name="ciudad" placeholder="ciudad" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input  type="hidden"class="form-control" value="<?php echo $id?>" name="id" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" value="<?php echo $telefono?>" name="telefono" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" value="<?php echo $email?>" name="email" class="form-control" placeholder="Ingrese Email" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $nombre_prov?>" name="nombre_prov"class="form-control" placeholder="marca" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit"name="accion"value="editar">editar</button>
    
                                    </div>
                                </form> 
                            </div>

                        </div>
    </div>