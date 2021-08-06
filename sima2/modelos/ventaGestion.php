<?php

class gestionVentas{


    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
        session_start();
    }

    public function prodventa($producto,$cant){
        $pdo=new base();
        $pdo=$pdo->construct();
        $id_item = $producto;
        $cant = $cant;
        $sentencia = $pdo->prepare("SELECT * FROM `producto` WHERE id_item = $id_item ");
        $sentencia->execute();
        $prodlistado = $sentencia->fetch(PDO::FETCH_OBJ);
        if ($prodlistado->cantidad_prod < 1) {

        header("Location: ../ventas/ventas.php?status=5");
        exit;
    }
    if ($cant > $prodlistado->cantidad_prod) {
    header("Location: ../ventas/ventas.php?status=4");
    exit;
    }   

$indice = false;
for ($i = 0; $i < count($_SESSION["venta"]); $i++) {
    if ($_SESSION["venta"][$i]->id_item === $producto) {
        $indice = $i;
        break;
    }
}
if ($indice === false) {
    $prodlistado->cantidad_prod = $cant;
    array_push($_SESSION["venta"], $prodlistado);
} else {
    $cantidadExistente = $_SESSION["venta"][$indice]->cantidad_prod;
    if ($cantidadExistente >= $prodlistado->cantidad_prod) {
        header("Location: ../ventas/ventas.php?status=6");
        exit;
    }
    $_SESSION["venta"][$indice]->cantidad_prod++;
}

header("Location: ../ventas/ventas.php");

    }
    
public function eliminarprodlistado($indice) {
array_splice($_SESSION["venta"], $indice,1 );
header("location:../ventas/ventas.php?status=3");
}
}