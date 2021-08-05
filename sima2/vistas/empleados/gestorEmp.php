<?php
require_once '../../modelos/Empleados.php';
require_once '../../controlador/controlEmp.php';
require_once '../../modelos/gestionEmpleado.php';

$control= new ControlEmpleado();
if( isset($_POST["accion"])){
    if($_POST["accion"] == "editar"){
        $control->editarEmpleado($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['email'],$_POST['password'],$_POST['cargo']);
        $control->volver("../../vistas/empleados/empleados.php");
    }
    if($_POST["accion"] == "guardar"){
        $control->guardarEmpleado($_POST['doc_empleado'],$_POST['nombre_empleado'],$_POST['apellido_empleado'],$_POST['telefono_empleado'],$_POST['direccion_empleado'],$_POST['email'],$_POST['password'],$_POST['cargo_empleado']);
        $control->volver("../../vistas/empleados/empleados.php");
        }
    }