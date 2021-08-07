<?php
	session_start();
	
    include("../../templates/menusup.php");
    include("../../templates/menulateral.php");
	include("../../modelos/databasepdo.php");
	$pdo = new base();
	$pdo=$pdo->construct();
	
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
<?php if(isset($_GET["status"])){
		if($_GET["status"] === "1"){
			?>
			<script type="text/javascript">alertify.success('Venta registrada!');</script>

	<?php	}} ?>
	
		<h1>Ventas</h1>
		<div class="col-1">
			<a class="btn btn-secondary" href="./ventas.php">Nueva </a>
		</div>


    <div class="row" id="ventas">
    <?php
$sentencia = $pdo->query("SELECT ventas.total, ventas.fecha, ventas.id,cliente.nombre as cliente, GROUP_CONCAT( producto.id_item, '..', producto.nombre_prod, '..', productos_vendidos.cantidad SEPARATOR '__') AS producto FROM ventas INNER JOIN cliente ON cliente.id_cliente = ventas.cliente INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN producto ON producto.id_item = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<?php if($tipo_session == "administrador"){?>
	<div class="col-xs-12">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id cliente</th>
					<th>Fecha</th>
					<th>Productos vendidos</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				print_r($ventas);
				foreach($ventas as $venta){ ?>
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
	<?php } ?>
    </div>
</body>