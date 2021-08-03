<?php

session_start();

unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/ventas/ventas.php?status=2");
?>