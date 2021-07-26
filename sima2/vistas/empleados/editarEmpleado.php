<?php
    include ("../../templates/menulateral.php");
    include ("../../templates/menusup.php");
    $id=(isset($_POST['id']))?$_POST['id'] :"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre'] :"";
    $apellido=(isset($_POST['apellido']))?$_POST['apellido'] :"";
    $telefono=(isset($_POST['telefono']))?$_POST['telefono'] :"";
    $direccion=(isset($_POST['direccion']))?$_POST['direccion'] :"";
    $cargo=(isset($_POST['cargo']))?$_POST['cargo'] :"";
?>

        <div id="contenido" >
            <div class="row">
                                <form class=" needs-validation" method="POST" action="gestorEmp.php"validate>
                                <div id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRODUCTO</h5>
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
                                    <input type="text" class="form-control" value="<?php echo $apellido?>" name="apellido" placeholder="apellido" required>
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
                                        <input type="text" value="<?php echo $direccion?>" name="direccion"class="form-control" placeholder="Ingrese Direccion Residencia" required> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $cargo?>" name="cargo" class="form-control" placeholder="Ingrese cargo" required>  
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