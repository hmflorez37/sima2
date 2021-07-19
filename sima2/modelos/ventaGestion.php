<?php

class gestionVentas{


    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
    }

    public function listarProducto(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
        $sentencia=$this->$pdo->prepare("SELECT * FROM producto");
    $sentencia->execute();
    $prodVenta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $prodVenta;

    }
    public function prodventa(producto $producto){
        $id_item = $producto->obtenerId();
        $cant = $producto->obtenerCant();
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
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
session_start();
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
    if ($cantidadExistente > $prodlistado->cantidad_prod) {
        header("Location: ../ventas/ventas.php?status=6");
        exit;
    }
    $_SESSION["venta"][$indice]->cantidad_prod++;
}

header("Location: ../ventas/ventas.php");

    }

public function eliminarprodlistado($indice) {

    session_start();
array_splice($_SESSION["venta"], $indice, 1);
header("location:../ventas/ventas.php?status=3");
}
}