<?php
require_once '../modelos/ventaGestion.php';
require_once 'controlVenta.php';
$controlven = new controlVenta();

if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];
if ($indice >=0){
    $controlven->eliminarprod($indice);
}