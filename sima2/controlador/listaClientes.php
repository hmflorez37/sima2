<?php 


function listarc (){
        require_once '../controlador/controlCliente.php';
        $lista=new controlCliente();
        $listaClientes=$lista->listaClientes();?>
        <table class="table table-striped table-bordered" style="text-align: center;">
        <thead>
                <tr>
                        <th>DOC</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CELULAR</th>
                        <th>DIRECION</th>
                        <th>EMAIL</th>
                        <th>OPCIONES</th>
                </tr>
        </thead>
        <?php
        foreach ($listaClientes as $mostrar ) {?>
        <tr>
                        <td><?php echo $mostrar ['id_cliente']?></td>
                        <td><?php echo $mostrar ['nombre']?></td>
                        <td><?php echo $mostrar ['apellido']?></td>
                        <td><?php echo $mostrar ['telefono']?></td>
                        <td><?php echo $mostrar ['direccion']?></td>
                        <td><?php echo $mostrar ['email']?></td>
        <td><form action="../../vistas/clientes/editarcliente.php"method="POST">
                <input type="hidden" name="id" value="<?php echo $mostrar ['id_cliente']?>">
                <input type="hidden" name="nombre" value="<?php echo $mostrar ['nombre']?>">
                <input type="hidden" name="apellido" value="<?php echo $mostrar ['apellido']?>">
                <input type="hidden" name="telefono"value="<?php echo $mostrar ['telefono']?>">
                <input type="hidden" name="direccion"value="<?php echo $mostrar ['direccion']?>">
                <input type="hidden" name="email"value="<?php echo $mostrar ['email']?>">
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
listarc();

