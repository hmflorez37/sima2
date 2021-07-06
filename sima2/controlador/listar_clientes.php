<?php
include("../../modelos/databasepdo.php");
    $sentencia=$pdo->prepare("SELECT * FROM cliente");
    $sentencia->execute();
    $listaclientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);

