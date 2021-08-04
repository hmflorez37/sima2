<?php 


function listare (){
        require_once '../controlador/controlEmp.php';
        $lista=new controlEmpleado();
        $listaEmpleados=$lista->listaEmpleados();?>
        <table class="table table-striped table-bordered" style="text-align: center;">
        <thead>
                <tr>
                        <th>DOC</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CELULAR</th>
                        <th>DIRECION</th>
                        <th>EMAIL</th>
                        <th>CLAVE</th>
                        <th>CARGO</th>
                        <th>OPCIONES</th>
                </tr>
        </thead>
        <?php
        foreach ($listaEmpleados as $mostrar ) {?>
        <tr>
                        <td><?php echo $mostrar ['id_empleado']?></td>
                        <td><?php echo $mostrar ['nombre_empleado']?></td>
                        <td><?php echo $mostrar ['apellido_empleado']?></td>
                        <td><?php echo $mostrar ['telefono_empleado']?></td>
                        <td><?php echo $mostrar ['direccion_empleado']?></td>
                        <td><?php echo $mostrar ['email_empleado']?></td>
                        <td><?php echo $mostrar ['password']?></td>
                        <td><?php echo $mostrar ['cargo_empleado']?></td>
        <td><form action="../../vistas/empleados/editarempleado.php"method="POST">
                <input type="hidden" name="id" value="<?php echo $mostrar ['id_empleado']?>">
                <input type="hidden" name="nombre" value="<?php echo $mostrar ['nombre_empleado']?>">
                <input type="hidden" name="apellido" value="<?php echo $mostrar ['apellido_empleado']?>">
                <input type="hidden" name="telefono"value="<?php echo $mostrar ['telefono_empleado']?>">
                <input type="hidden" name="direccion"value="<?php echo $mostrar ['direccion_empleado']?>">
                <input type="hidden" name="email"value="<?php echo $mostrar ['email_empleado']?>">
                <input type="hidden" name="password"value="<?php echo $mostrar ['password']?>">
                <input type="hidden" name="cargo"value="<?php echo $mostrar ['cargo_empleado']?>">
                <button class="btn btn-warning" type="submit"value="editar" name="accion"><i class = "zmdi zmdi-edit"> </i></button>
                
        </form>
        </td>
        </tr>
        
        <?php 
        }
        ?>
        </table>
        <?php
}
listare();

