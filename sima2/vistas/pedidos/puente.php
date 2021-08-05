<?php
require_once '../../modelos/pedidoGestion.php';
require_once '../../controlador/controladorpedido.php';
$controlven = new controlpedido();
$cant = (isset($_GET['cant'])) ? $_GET['cant'] : $_POST['unidad'];
$producto = (isset($_GET['prod'])) ? $_GET['prod'] : $_POST["codigo"];
if($producto){
    $controlven->pedido($producto,$cant);
}
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];
if ($indice){
    $controlven->eliminarPedido($indice);
}