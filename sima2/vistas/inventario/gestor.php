<?php
require_once '../../modelos/producto.php';
require_once '../../controlador/controlInfoProd.php';
require_once '../../modelos/productoGestion.php';
$control = new ControlInfoProd();
if( isset($_POST["accion"])){
    if($_POST["accion"] == "editar"){
        $control->editarprod($_POST['id'],$_POST['nombre'],$_POST['marca'],$_POST['costo'],$_POST['cantidad']);
        $control->volver("../../vistas/inventario/inventario.php");
    }
    elseif($_POST["accion"] == "guardar"){
        $control->guardarprod($_POST['id'],$_POST['nombre'],$_POST['marca'],$_POST['costo'],$_POST['cantidad']);
            $control->volver("../../vistas/inventario/inventario.php");
        }
    }

