<?php


session_start();


$clientev=(isset($_POST['clientev']))?$_POST['clientev']:"";
echo($clientev);
$total=(isset($_POST['total']))?$_POST['total']:"";
echo($total);
include_once "../modelos/databasepdo.php";
$pdo=new base();
        $pdo=$pdo->construct();


$ahora = date("Y-m-d H:i:s");


$sentencia = $pdo->prepare("INSERT INTO `ventas`(`fecha`, `cliente`, `total`) VALUES (?, ?, ?);");
$sentencia->execute([$ahora, $clientev, $total]);

$sentencia = $pdo->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$pdo->beginTransaction();
$sentencia = $pdo->prepare("INSERT INTO `productos_vendidos`(`id_producto`, `id_venta`, `cantidad`) VALUES (?, ?, ?);");
$sentenciaExistencia = $pdo->prepare("UPDATE producto SET cantidad_prod = cantidad_prod - ? WHERE id_item = ?;");
foreach ($_SESSION["venta"] as $producto) {
	$sentencia->execute([$producto->id_item, $idVenta, $producto->cantidad_prod]);
	$sentenciaExistencia->execute([$producto->cantidad_prod, $producto->id_item]);
}
$pdo->commit();
unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/ventas/verVentas.php?status=1");




