<?php
include("../modelos/databasepdo.php");
$cliente = (isset($_GET['cliente'])) ? $_GET['cliente'] : "";
$cliente = (isset($_GET['mantov'])) ? $_GET['mantov'] : "";
$producto = (isset($_GET['prod'])) ? $_GET['prod'] : $_POST["codigo"];
$cant = (isset($_GET['cant'])) ? $_GET['cant'] : $_POST['unidad'];

$sentencia = $pdo->prepare("SELECT * FROM `producto` WHERE id_item = $producto ");
$sentencia->execute();
$prodlistado = $sentencia->fetch(PDO::FETCH_OBJ);
if ($prodlistado->cantidad_prod < 1) {

    header("Location: ../vistas/ventas/ventas.php?status=5");
    exit;
}
if ($cant > $prodlistado->cantidad_prod) {
    header("Location: ../vistas/ventas/ventas.php?status=4");
    exit;
}
session_start();
$indice = false;
for ($i = 0; $i < count($_SESSION["venta"]); $i++) {
    if ($_SESSION["venta"][$i]->id_item === $producto) {
        $indice = $i;
        break;
    }
}
if ($indice === false) {
    $prodlistado->cantidad_prod = $cant;
    array_push($_SESSION["venta"], $prodlistado);
} else {
    $cantidadExistente = $_SESSION["venta"][$indice]->cantidad_prod;
    if ($cantidadExistente > $prodlistado->cantidad_prod) {
        header("Location: ../vistas/ventas/ventas.php?status=6");
        exit;
    }
    $_SESSION["venta"][$indice]->cantidad_prod++;
}

header("Location: ../vistas/ventas/ventas.php");
