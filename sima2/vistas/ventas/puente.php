<?php
require_once '../../modelos/ventaGestion.php';
require_once '../../controlador/controlVenta.php';
$controlven = new controlVenta();
$cant = (isset($_GET['cant'])) ? $_GET['cant'] : $_POST['unidad'];
$producto = (isset($_GET['prod'])) ? $_GET['prod'] : $_POST["codigo"];

if($producto){
    $controlven->ventatemp($producto,$cant);
}
