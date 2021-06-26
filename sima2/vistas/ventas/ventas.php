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
                                <form class="row g-3 needs-validation" validate>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="nombre" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="apellido" required>
                                    <div class="valid-feedback">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" id="validationCustom03" placeholder="documento" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" id="validationCustom04" placeholder="tel" required>  
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="direccion" class="form-control" placeholder="Ingrese Direccion Residencia" required> 
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
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <button class="btn btn-primary" type="reset">limpiar</button>
    
                                    </div>
                                </form> 
                            </div>
                            <div class="modal-footer">                 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link " id="btn-search"><i class = "zmdi zmdi-search"> </i></a>
                </li>
                <input class="form-control form-control-dark w-75" type="text" placeholder="Search" aria-label="Search">
            </ul>        
    
    </div>
    <!--tabla-->
    <div class="col-12 tabla">
        <div class="tabla-Ventas">
            <div class="row">
                <div class="col-sm-2">
                    <form id="frmVentasProductos">
                        <label>Seleciona Cliente</label>
                        <select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
                            <option value="A">Selecciona</option>
                            <option value="0">Sin cliente</option>
                            <?php
				$sql="SELECT `id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`, `e-mail` FROM `cliente`";
				$result=mysqli_query($conn,$sql);
				while ($cliente=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $cliente[0] ?>"><?php echo $cliente[2]." ".$cliente[1] ?></option>
				<?php endwhile; ?>
                        </select>
                        <select class="form-control input-sm" id="mantenimiento" name="mantenimiento">
                            <option value="A">Selecciona</option>
                            <option value="0">Sin mantenimiento</option>
                            <?php
				$sql="SELECT `id_manto` FROM `manto`";
				$result=mysqli_query($conexion,$sql);

				while ($manto=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $manto[0] ?>"></option>
				<?php endwhile; ?>
                        </select>
                        <label>Producto</label>
                        <select class="form-control input-sm" id="productoVenta" name="productoVenta">
                            <option value="A">Selecciona</option>
                            <?php
				$sql="SELECT `id_item`, `nombre_prod` FROM `producto`";
				$result=mysqli_query($conn,$sql);

				while ($producto=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
				<?php endwhile; ?>
                        </select>
                        <label>Descripcion</label>
                        <textarea id="descripcionV" name="descripcionV" class="form-control input-sm"></textarea>
                        <label>Cantidad</label>
                        <input type="text" class="form-control input-sm" id="cantidadV" name="cantidadV">
                        <p></p>
                        <span class="btn btn-primary" id="btnAgregaVenta">Agregar</span>
                        <span class="btn btn-danger" id="btnVaciarVentas">Vaciar ventas</span>
                    </form>
                </div>
                <div class="col-sm-10">
                    <table class="table table-bordered table-striped" style="text-align: center;">
                        <caption>
                            <span class="btn btn-success"> Generar venta
                            </span>
                        </caption>
                        <tr>
                            <td>Nombre</td>
                            <td>Descripcion</td>
                            <td>Cantidad</td>
                            <td>Quitar</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span class="btn btn-danger btn-xs">
                                    <span><i class = "zmdi zmdi-delete"> </i></span>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        </div>
        </div>
    </div>
    
</body>