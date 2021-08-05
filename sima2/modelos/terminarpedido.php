<?php


session_start();


$proveedor=(isset($_POST['proveedor']))?$_POST['proveedor']:"";
echo($proveedor);
$total=(isset($_POST['total']))?$_POST['total']:"";
echo($total);
include_once "../modelos/databasepdo.php";
$pdo=new base();
        $pdo=$pdo->construct();


$ahora = date("Y-m-d H:i:s");


$sentencia = $pdo->prepare("INSERT INTO `pedidos`( `fecha_pedido`, `id_prov_ped`, `Cant_Prod_ped`) VALUES (?, ?, ?);");
$sentencia->execute([$ahora, $proveedor, $total]);

$sentencia = $pdo->prepare("SELECT id_pedido FROM pedidos ORDER BY id_pedido DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idpedido = $resultado === false ? 1 : $resultado->id_pedido;

$pdo->beginTransaction();
$sentencia = $pdo->prepare("INSERT INTO `pedido_producto`( `id_producto_pedido`, `id_pedido`, `cantidad`) VALUES (?, ?, ?);");
foreach ($_SESSION["venta"] as $producto) {
	$sentencia->execute([$producto->id_item, $idpedido, $producto->cantidad_prod]);
}
$pdo->commit();
unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/pedidos/verPedidos.php?status=1");




