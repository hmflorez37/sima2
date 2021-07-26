<?php 


function listarp (){
        require_once '../controlador/controladorProveedor.php';
        $lista=new controladorProveedor();
        $listaproveedor=$lista->listar();?>
        <table class="table table-striped table-bordered" style="text-align: center;">
        <thead>
                <tr>
                        <th>DOC</th>
                        <th>NOMBRE</th>
                        <th>CIUDAD</th>
                        <th>CELULAR</th>
                        <th>EMAIL</th>
                        <th>MARCA</th>
                        <th>OPCIONES</th>
                </tr>
        </thead>
        <?php
        foreach ($listaproveedor as $mostrar ) {?>
        <tr>
                        <td><?php echo $mostrar ['id_proveedor']?></td> 
                        <td><?php echo $mostrar ['nombre_contacto']?></td>
                        <td><?php echo $mostrar ['ciudad']?></td>
                        <td><?php echo $mostrar ['telefono_contacto']?></td>
                        <td><?php echo $mostrar ['email']?></td>
                        <td><?php echo $mostrar ['nombre_prov']?></td>
        <td><form action="../../vistas/proveedores/editarproveedor.php"method="POST">
                <input type="hidden" name="id" value="<?php echo $mostrar ['id_proveedor']?>">
                <input type="hidden" name="nombre" value="<?php echo $mostrar ['nombre_contacto']?>">
                <input type="hidden" name="ciudad" value="<?php echo $mostrar ['ciudad']?>">
                <input type="hidden" name="telefono"value="<?php echo $mostrar ['telefono_contacto']?>">
                <input type="hidden" name="email"value="<?php echo $mostrar ['email']?>">
                <input type="hidden" name="nombre_prov"value="<?php echo $mostrar ['nombre_prov']?>">
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
listarp();

