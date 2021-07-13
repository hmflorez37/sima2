<?php 


function listar (){
        require_once '../controlador/controlInfoProd.php';
        $lista=new controlInfoProd();
        $listaProductos=$lista->listar();?>
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
        
        <?php 
        }
        ?>
        </table>
        <?php
}
listar();

