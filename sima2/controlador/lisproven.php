<?php 
    $sentencia=$pdo->prepare("SELECT * FROM producto");
    $sentencia->execute();
    $prodVenta=$sentencia->fetchAll(PDO::FETCH_ASSOC);