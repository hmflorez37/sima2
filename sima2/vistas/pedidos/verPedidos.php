<?php session_start();
if(!isset($_SESSION['id'])){
	header("location:../../index.php");
}
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
			<script type="text/javascript">alertify.success('Pedido registrada!');</script>

	<?php	}} ?>
	
		<h1>Pedido</h1>
		<div class="col-1">
			<a class="btn btn-secondary" href="./pedidos.php">Nueva </a>
		</div>


    <div class="row" id="ventas">
    <?php
$sentencia = $pdo->query("SELECT pedidos.Cant_Prod_ped, pedidos.fecha_pedido, pedidos.id_pedido, pedidos.id_prov_ped, GROUP_CONCAT( producto.id_item, '..', producto.nombre_prod, '..', pedido_producto.cantidad SEPARATOR '__') AS producto FROM pedidos INNER JOIN pedido_producto ON pedido_producto.id_pedido = pedidos.id_pedido INNER JOIN producto ON producto.id_item = pedido_producto.id_producto_pedido GROUP BY pedidos.id_pedido ORDER BY pedidos.id_pedido");
$pedido = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php if($tipo_session == "administrador"){?>
	<div class="col-xs-12">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id proveedor</th>
					<th>Fecha</th>
					<th>Productos solicitados</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pedido as $pedido){ ?>
				<tr>
					<td><?php echo $pedido->id_prov_ped?></td>
					<td><?php echo $pedido->fecha_pedido ?></td>
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
                            
								<?php foreach(explode("__", $pedido->producto) as $productosConcatenados){ 
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
					<td><?php echo $pedido->Cant_Prod_ped ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>
    </div>
</body>