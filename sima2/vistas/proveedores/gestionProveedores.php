<?php
require_once '../../modelos/proveedor.php';
require_once '../../controlador/controladorProveedor.php';
require_once '../../modelos/proveedorGestion.php';

$control= new controladorProveedor();
if( isset($_POST["accion"])){
    if($_POST["accion"] == "editar"){
        $control->editarproveedor($_POST['id'],$_POST['nombre'],$_POST['ciudad'],$_POST['telefono'],$_POST['email'],$_POST['nombre_prov']);
        $control->volver("../../vistas/proveedores/proveedores.php");
    }
    if($_POST["accion"] == "guardar"){
        $control->guardarproveedor($_POST['id'],$_POST['nombre'],$_POST['ciudad'],$_POST['telefono'],$_POST['email'],$_POST['nombre_prov']);
        $control->volver("../../vistas/proveedores/proveedores.php");
        }
    }