<?php
include("../modelos/databasepdo.php");

$id=(isset($_POST['id']))?$_POST['id'] :"";
$accion=(isset($_POST['accion']))?$_POST['accion'] :"";

    switch($accion){
        case"delete":
            $sentencia=$pdo->prepare("DELETE FROM `temp` WHERE id_item =:Id");
            $sentencia->bindParam(':Id',$id);
            $sentencia->execute();
            header("location:../vistas/ventas/ventas.php");
        break;
    }
?>