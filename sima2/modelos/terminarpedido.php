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


$sentencia = $pdo->prepare("INSERT INTO `pedidos`( `fecha_pedido`, `Marca_Prod_ped`, `id_prov_ped`, `Cant_Prod_ped`) VALUES (?, ?, ?,?,);");
$sentencia->execute([$ahora, $proveedor, $total]);

$sentencia = $pdo->prepare("SELECT id_pedido FROM pedidos ORDER BY id_pedido DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$pdo->beginTransaction();
$sentencia = $pdo->prepare("INSERT INTO `pedido_producto`(`id`, `id_producto_pedido`, `id_pedido`, `cantidad`) VALUES (?, ?, ?,?);");
$sentenciaExistencia = $pdo->prepare("UPDATE producto SET cantidad_prod = cantidad_prod - ? WHERE id_item = ?;");
foreach ($_SESSION["venta"] as $producto) {
	$sentencia->execute([$producto->id_item, $idVenta, $producto->cantidad_prod]);
	$sentenciaExistencia->execute([$producto->cantidad_prod, $producto->id_item]);
}
$pdo->commit();
unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/pedidos/verPedidos.php?status=1");




