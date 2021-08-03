<?php
require_once '../../modelos/Cliente.php';
require_once '../../controlador/controlCliente.php';
require_once '../../modelos/clienteGestion.php';

$control= new ControlCliente();
if( isset($_POST["accion"])){
    if($_POST["accion"] == "editar"){
        $control->editarCliente($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['email']);
        $control->volver("../../vistas/clientes/clientes.php");
    }
    if($_POST["accion"] == "guardar"){
        $control->guardarCliente($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['email']);
        $control->volver("../../vistas/clientes/clientes.php");
        }
    }