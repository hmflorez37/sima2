<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["venta"], $indice, 1);
header("location:../vistas/ventas/ventas.php?status=3");
?>