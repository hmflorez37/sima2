<?php

session_start();

unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/pedidos/pedidos.php?status=2");
?>