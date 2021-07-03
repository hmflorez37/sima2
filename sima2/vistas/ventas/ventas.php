<?php
    include("../../modelos/databasepdo.php");
    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");
    include("../../controlador/listar_prodpdo.php");
    include("../../controlador/listar_clientes.php");
    include("../../controlador/listar_ventatemp.php");

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
<!--fila select-->
    <div class="row">
        
        
    </div>
        
<!--final fila select-->

<!--contenido-->
<div class="container-fuid">
    <div class="row">
        <div class="col-9">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>MARCA</th>
                    <th>CANTIDAD</th>
                    <th>OPCION</th>
                    
                </tr>
            </thead>
            <tbody><form action="../../controlador/eliminarprod.php"method="post">
                <tr>
                <?php foreach($prodlistado as $mostrar){ 
					?>
				<tr>
                <td><?php echo $mostrar ['id_item']?></td>
            <td><?php echo $mostrar ['nombre_prod']?></td>
            <td><?php echo $mostrar ['id_marcas']?></td>
            <td><?php echo $mostrar ['cantidad_prod']?></td>
                    <td><input type="hidden" name="id" value="<?php echo $mostrar ['id_item']?>">
                    <button type="submit" value="delete" name="accion" class="btn btn-danger">eliminar</button>
                    </td>
                </tr>
                
                <?php
                }
                ?>
            </tbody></form>
        </table>
        </div>
        <div class="col-3">
        <div class="col-12">
            <form action="../ventas/ventastablatemp.php" method=GET>
            <div class="col-12">
        <select name="cliente"class="form-select" aria-label="Default select">
                        <option selected>seleccionar cliente</option>

                        <?php foreach ($listaclientes as $mostrar ) {?>
                        <option name="cliente" value="<?php echo $mostrar ['id_cliente']?>"><?php echo $mostrar ['nombre']?><?php echo ("  ")?><?php echo $mostrar ['apellido']?></option>

                        <?php } ?>
                    </select>
        </div>
        <div class="col-12">
            <select class="form-select" aria-label="Default select">
                <option selected>seleccionar mantenimiento</option>
                <option value="1">sin mantenimiento</option>

            </select>
        </div>
                <div class="col-12">
                    <select name="prod"class="form-select" aria-label="Default select">
                        <option selected>producto</option>

                        <?php foreach ($listaProductos as $mostrar ) {?>
                        <option name="product_select" value="<?php echo $mostrar ['id_item']?>"><?php echo $mostrar ['nombre_prod']?><?php echo (" marca ")?><?php echo $mostrar ['id_marcas']?></option>

                        <?php } ?>
                    </select>
                    <input class="form-control"type="num" name=cant value="1">
                </div>
                <div class="col-12">
                    <input class="form-control btn btn-primary"type="submit" value="agregar"name="agregar">
                </div>
            </form>
    </div>
        <input type="num" value="" class="form-control" placeholder="cantidad total" name="cantidadt">
        <div class="btn-group-vertical">
        
        <button class=" btn btn-success mt-2" type="submit" name="generar">GENERAR VENTA</button>
</div>
        </div>
    </div>
</div>
<!--fin de contenido-->
</div>

</body>