<?php
    include("../../templates/menusup.php");
    include("../../templates/menulateral.php");
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



    <div class="row">
    <?php
include_once "../../modelos/databasepdo.php";
$sentencia = $pdo->query("SELECT ventas.total, ventas.fecha, ventas.id,ventas.cliente, GROUP_CONCAT( producto.id_item, '..', producto.nombre_prod, '..', productos_vendidos.cantidad SEPARATOR '__') AS producto FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN producto ON producto.id_item = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
	<div class="row">
		<h1>Ventas</h1>
		<div class="col-1">
			<a class="btn btn-success" href="./ventas.php">Nueva </a>
		</div>
    
        <div class="col-9">
        <form class="d-flex" method="post" action="">
        <input class="form-control me-2" type="text" placeholder="Search"name="buscar" id="buscar">
        </form>
        </div> 
    </div>
	<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>id venta</th>
					<th>Fecha</th>
					<th>Productos vendidos</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ventas as $venta){ ?>
				<tr>
					<td><?php echo $venta->cliente ?></td>
					<td><?php echo $venta->fecha ?></td>
					<td>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>
                            
								<?php foreach(explode("__", $venta->producto) as $productosConcatenados){ 
								$producto = explode("..", $productosConcatenados)
								?>
								<tr>
									<td><?php echo $producto[0] ?></td>
									<td><?php echo $producto[1] ?></td>
									<td><?php echo $producto[2] ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</td>
					<td><?php echo $venta->total ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
    </div>
</body>