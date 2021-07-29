<?php
require_once '../../modelos/producto.php';
require_once '../../controlador/controlInfoProd.php';
require_once '../../modelos/productoGestion.php';
require_once '../../modelos/ventaGestion.php';
require_once '../../controlador/controlVenta.php';
$control = new ControlInfoProd();
if( isset($_POST["accion"])){
    if($_POST["accion"] == "editar"){
        $control->editarprod($_POST['id'],$_POST['nombre'],$_POST['marca'],$_POST['costo'],$_POST['cantidad']);
        $control->volver("../../vistas/inventario/inventario.php");
        return;
    }
    elseif($_POST["accion"] == "guardar"){
        $control->guardarprod($_POST['id'],$_POST['nombre'],$_POST['marca'],$_POST['costo'],$_POST['cantidad']);
            $control->volver("../../vistas/inventario/inventario.php");
            return;
        }   
    }
    exit;

$controlven = new controlVenta();
$cant = (isset($_GET['cant'])) ? $_GET['cant'] : $_POST['unidad'];
$producto = (isset($_GET['prod'])) ? $_GET['prod'] : $_POST["codigo"];
if($producto){
    $controlven->ventatemp($producto,$cant);
}
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];
if ($indice){
    $controlven->eliminarprod($indice);
}