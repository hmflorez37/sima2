<?php
session_start();
    include("../../modelos/databasepdo.php");
    include("../../templates/menusup.php");
    include("../../templates/menulateral.php");
    $id=(isset($_POST['id']))?$_POST['id'] :"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre'] :"";
    $marca=(isset($_POST['marca']))?$_POST['marca'] :"";
    $costo=(isset($_POST['costo']))?$_POST['costo'] :"";
    $cantidad=(isset($_POST['cantidad']))?$_POST['cantidad'] :"";
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
<div class="container">

<form method="POST" action="../inventario/gestor.php?">
<!-- Button trigger modal -->

<!-- formulario -->
<div id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRODUCTO</h5>
    </div>
    <div class="modal-body">
        <div class="form-row">
        
        <input class="form-control" type="num" name="id"value="<?php echo $id?>" placeholder="serial" id="id" required><br>
        
        <input class="form-control" type="text" name="nombre"value="<?php echo $nombre?>" placeholder="nombre" id="nombre" required><br>
        
        <input class="form-control" type="text" name="marca" value="<?php echo $marca?>" placeholder="marca" id="marca" required><br>
        
        <input class="form-control" type="text" name="costo" value="<?php echo $costo?>" placeholder="costo producto" id="costo"><br>
        
        <input class="form-control" type="num" name="cantidad" value="<?php echo $cantidad?>" placeholder="cantidad" id="cantidad" required><br>

        </div>
        

        

    </div>
    <div class="modal-footer">
        <button class="btn btn-warning" value="editar"type="submit"name="accion">modificar</button>
    </div>
    </div>
</div>
</div>
                                    


</form> 
</div>

</body>