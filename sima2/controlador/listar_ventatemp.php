<?php
    $sentencia=$pdo->prepare("SELECT * FROM temp");
    $sentencia->execute();
    $prodlistado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

