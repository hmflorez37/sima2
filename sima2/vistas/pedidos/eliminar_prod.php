<?php
require_once '../../modelos/pedidoGestion.php';
require_once '../../controlador/controladorpedido.php';
$controlpedido = new controlpedido();

if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];
if ($indice>=0){
    $controlpedido->eliminarPedido($indice);
}