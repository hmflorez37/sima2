<?php
// funcion para listar inventario
function listado(){
    include("../modelos/databasepdo.php");
    $consulta=(isset($_POST['buscar']))?$_POST['buscar']:"";
if(!$consulta){
    $sentencia=$pdo->prepare("SELECT * FROM producto");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

}else {
    $consulta=(isset($_POST['buscar']))?$_POST['buscar']:"";
    $sentencia=$pdo->prepare("SELECT id_item , nombre_prod , id_marcas , fecha_vencimiento , cantidad_prod FROM producto where id_item like '%".$consulta."%' or nombre_prod like '%".$consulta."%' or id_marcas like '%".$consulta."%' ");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    if(empty($listaProductos)){?>
                            </div>
<div class="alert alert-danger" role="alert">
    el producto que busca no existe
</div>
                        <?php
    
    }

}


?>
<table class="table table-striped table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>MARCA</th>
                    <th>FECHA VENCIMIENTO</th>
                    <th>CANTIDAD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <?php
            foreach ($listaProductos as $mostrar ) {?>
            <tr>
            <td><?php echo $mostrar ['id_item']?></td>
            <td><?php echo $mostrar ['nombre_prod']?></td>
            <td><?php echo $mostrar ['id_marcas']?></td>
            <td><?php echo $mostrar ['fecha_vencimiento']?></td>
            <td><?php echo $mostrar ['cantidad_prod']?></td>
            <td><form action="../../vistas/inventario/inventarioedit.php"method="POST">
                <input type="hidden" name="id" value="<?php echo $mostrar ['id_item']?>">
                <input type="hidden" name="nombre" value="<?php echo $mostrar ['nombre_prod']?>">
                <input type="hidden" name="marca" value="<?php echo $mostrar ['id_marcas']?>">
                <input type="hidden" name="fechaven"value="<?php echo $mostrar ['fecha_vencimiento']?>">
                <input type="hidden" name="cantidad"value="<?php echo $mostrar ['cantidad_prod']?>">
                <button class="btn btn-warning" type="submit"value="edit" name="accion"><i class = "zmdi zmdi-edit"> </i></button>
                
            </form>
            </td>
        </tr>
        <?php }
    
    ?>
        </table>
        <?php
    
            }
            listado()
            ?>

